<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/**
 * CI Wrapper Class for PHP DateTime which adds support for gmt/utc offset when a
 * timezone is absent
 */
class CI_DateTime extends DateTime {
	
	/**
	 * UTC Offset, if needed. Only used when a timezone is not set. When
	 * timezones are used this will equal 0.
	 *
	 * @var integer
	 */
	protected $utc_offset = 0;
	
	/**
	 * Output an ISO 8601 date string in local (WordPress) timezone.
	 *
	 * @since  3.0.0
	 * @return string
	 */
	public function __toString() {
		return $this->format( DATE_ATOM );
	}
	
	/**
	 * Set UTC offset - this is a fixed offset instead of a timezone.
	 *
	 * @param int $offset Offset.
	 */
	public function set_utc_offset( $offset ) {
		$this->utc_offset = intval( $offset );
	}
	
	/**
	 * Get UTC offset if set, or default to the DateTime object's offset.
	 */
	#[\ReturnTypeWillChange]
	public function getOffset() {
		return $this->utc_offset ?: parent::getOffset();
	}
	
	/**
	 * Set timezone.
	 *
	 * @param DateTimeZone $timezone DateTimeZone instance.
	 * @return DateTime
	 */
	#[\ReturnTypeWillChange]
	public function setTimezone( $timezone ) {
		$this->utc_offset = 0;
		return parent::setTimezone( $timezone );
	}
	
	/**
	 * Missing in PHP 5.2 so just here so it can be supported consistently.
	 *
	 * @since  3.0.0
	 * @return int
	 */
	#[\ReturnTypeWillChange]
	public function getTimestamp() {
		return method_exists( 'DateTime', 'getTimestamp' ) ? parent::getTimestamp() : $this->format( 'U' );
	}
	
	/**
	 * Get the timestamp with the WordPress timezone offset added or subtracted.
	 *
	 * @since  3.0.0
	 * @return int
	 */
	public function getOffsetTimestamp() {
		return $this->getTimestamp() + $this->getOffset();
	}
	
	/**
	 * Format a date based on the offset timestamp.
	 *
	 * @since  3.0.0
	 * @param  string $format Date format.
	 * @return string
	 */
	public function date( $format ) {
		return gmdate( $format, $this->getOffsetTimestamp() );
	}
	
}
