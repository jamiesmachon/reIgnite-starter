<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Data store class.
 */
class CI_Data_Store {
	
	/**
	 * Contains an instance of the data store class that we are working with.
	 *
	 * @var CI_Data_Store
	 */
	private $instance = NULL;
	
	/**
	 * Contains an array of default CI supported data stores.
	 * Format of object name => class name.
	 * Example: 'product' => 'CI_Product_Data_Store'
	 * You can also pass something like product_<type> for product stores and
	 * that type will be used first when available, if a store is requested like
	 * this and doesn't exist, then the store would fall back to 'product'.
	 *
	 * @var array
	 */
	private $stores = [
		'product'           => 'CI_Product_Data_Store',
		'product-variable'  => 'CI_Product_Variable_Data_Store',
		'product-variation' => 'CI_Product_Variation_Data_Store',
		'customer'          => 'CI_Customer_Data_Store',
		'order'             => 'CI_Order_Data_Store',
		'order-item'        => 'CI_Order_Item_Data_Store',
	];
	
	/**
	 * Contains the name of the current data store's class name.
	 *
	 * @var string
	 */
	private $current_class_name = '';
	
	/**
	 * The object type this store works with.
	 *
	 * @var string
	 */
	private $object_type = '';
	
	
	/**
	 * Tells CI_Data_Store which object (product, order, etc)
	 * store we want to work with.
	 *
	 * @param string $object_type Name of object.
	 * @throws Exception When validation fails.
	 */
	public function __construct( $object_type )
	{
		$this->object_type = $object_type;
		
		// If this object type can't be found, check to see if we can load one
		// level up (so if product-type isn't found, we try product).
		if ( ! array_key_exists( $object_type, $this->stores ) )
		{
			$pieces = explode( '-', $object_type );
			$object_type = $pieces[ 0 ];
		}
		
		if ( array_key_exists( $object_type, $this->stores ) )
		{
			$store = $this->stores[ $object_type ];
			if ( is_object( $store ) )
			{
				if ( ! $store instanceof CI_Object_Data_Store_Interface )
				{
					throw new Exception( 'Invalid data store.' );
				}
				$this->current_class_name = get_class( $store );
				$this->instance = $store;
			}
			else
			{
				if ( ! class_exists( $store ) )
				{
					throw new Exception( 'Invalid data store.' );
				}
				$this->current_class_name = $store;
				$this->instance = new $store();
			}
		}
		else
		{
			throw new Exception( 'Invalid data store.' );
		}
	}
	
	/**
	 * Only store the object type to avoid serializing the data store instance.
	 *
	 * @return array
	 */
	public function __sleep()
	{
		return [ 'object_type' ];
	}
	
	/**
	 * Re-run the constructor with the object type.
	 *
	 * @throws Exception When validation fails.
	 */
	public function __wakeup()
	{
		$this->__construct( $this->object_type );
	}
	
	/**
	 * Loads a data store.
	 *
	 * @param string $object_type Name of object.
	 *
	 * @return CI_Data_Store
	 * @throws Exception When validation fails.
	 */
	public static function load( $object_type )
	{
		return new CI_Data_Store( $object_type );
	}
	
	/**
	 * Returns the class name of the current data store.
	 *
	 * @return string
	 */
	public function get_current_class_name()
	{
		return $this->current_class_name;
	}
	
	/**
	 * Reads an object from the data store.
	 *
	 * @param CI_Data $data data instance.
	 */
	public function read( &$data )
	{
		$this->instance->read( $data );
	}
	
	/**
	 * Reads multiple objects from the data store.
	 *
	 * @param array[CI_Data] $objects Array of object instances to read.
	 */
	public function read_multiple( &$objects = [] )
	{
		// If the datastore allows for bulk-reading, use it.
		if ( is_callable( [ $this->instance, 'read_multiple' ] ) )
		{
			$this->instance->read_multiple( $objects );
		}
		else
		{
			foreach ( $objects as &$obj )
			{
				$this->read( $obj );
			}
		}
	}
	
	/**
	 * Create an object in the data store.
	 *
	 * @param CI_Data $data data instance.
	 */
	public function create( &$data )
	{
		$this->instance->create( $data );
	}
	
	/**
	 * Update an object in the data store.
	 *
	 * @param CI_Data $data data instance.
	 */
	public function update( &$data )
	{
		$this->instance->update( $data );
	}
	
	/**
	 * Delete an object from the data store.
	 *
	 * @param CI_Data $data data instance.
	 * @param array $args Array of args to pass to the delete method.
	 */
	public function delete( &$data, $args = [] )
	{
		$this->instance->delete( $data, $args );
	}
	
	/**
	 * Deletes meta based on meta ID.
	 *
	 * @param CI_Data $object CI_Data object.
	 * @param stdClass $meta (containing at least ->id).
	 */
	public function delete_meta( &$object, $meta )
	{
		delete_metadata_by_mid( $this->meta_type, $meta->id );
	}
	
	/**
	 * Add new piece of meta.
	 *
	 * @param CI_Data $object CI_Data object.
	 * @param stdClass $meta (containing ->key and ->value).
	 * @return int meta ID
	 */
	public function add_meta( &$object, $meta )
	{
		return add_metadata( $this->meta_type, $object->get_id(), ci_slash( $meta->key ), is_string( $meta->value ) ? ci_slash( $meta->value ) : $meta->value, FALSE );
	}
	
	/**
	 * Update meta.
	 *
	 * @param CI_Data $object CI_Data object.
	 * @param stdClass $meta (containing ->id, ->key and ->value).
	 */
	public function update_meta( &$object, $meta )
	{
		update_metadata_by_mid( $this->meta_type, $meta->id, $meta->value, $meta->key );
	}
	
	/**
	 * Data stores can define additional functions (for example, coupons have
	 * some helper methods for increasing or decreasing usage). This passes
	 * through to the instance if that function exists.
	 *
	 * @param string $method Method.
	 * @param mixed $parameters Parameters.
	 * @return mixed
	 */
	public function __call( $method, $parameters )
	{
		if ( is_callable( [ $this->instance, $method ] ) )
		{
			$object = array_shift( $parameters );
			$parameters = array_merge( [ &$object ], $parameters );
			return $this->instance->$method( ...$parameters );
		}
	}
	
	/**
	 * Check if the data store we are working with has a callable method.
	 *
	 * @param string $method Method name.
	 *
	 * @return bool Whether the passed method is callable.
	 */
	public function has_callable( string $method ) : bool
	{
		return is_callable( [ $this->instance, $method ] );
	}
}
