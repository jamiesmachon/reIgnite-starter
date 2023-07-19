-- create databases
CREATE
    DATABASE IF NOT EXISTS `soros_local`;
-- select the database to apply the next script to
USE
    `soros_local`;
-- create root user and grant rights
CREATE
    USER IF NOT EXISTS 'soros_user'@'localhost' IDENTIFIED BY '&Ch5hHqJW1fBeA6';
GRANT ALL
    ON `soros_local` TO 'soros_user'@'localhost';
CREATE
    USER IF NOT EXISTS 'soros_user'@'%' IDENTIFIED BY '&Ch5hHqJW1fBeA6';
GRANT ALL
    ON `soros_local` TO 'soros_user'@'%';

FLUSH
    PRIVILEGES;

-- Codeigniter sessions table
CREATE TABLE IF NOT EXISTS `ci_sessions`
(
    `ID`         VARCHAR(128)     NOT NULL,
    `ip_address` VARCHAR(45)      NOT NULL,
    `timestamp`  INT(10) UNSIGNED NOT NULL DEFAULT 0,
    `data`       LONGBLOB         NOT NULL,
    PRIMARY KEY (`ID`),
    UNIQUE KEY `id_UNIQUE` (`ID`),
    KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application login_attempts table
CREATE TABLE IF NOT EXISTS `login_attempts`
(
    `ip`      VARCHAR(20) NOT NULL,
    `attempt` DATETIME    NOT NULL,
    KEY `ip` (`ip`)
) ENGINE = MyISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- System options table
CREATE TABLE IF NOT EXISTS `options`
(
    `ID`           BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `option_name`  VARCHAR(255)        NOT NULL,
    `option_value` LONGTEXT            NOT NULL,
    `autoload`     VARCHAR(45)         NOT NULL DEFAULT 'no',
    `created`      TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated`      TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `delete`       TIMESTAMP           NULL     DEFAULT NULL,
    PRIMARY KEY (`ID`),
    UNIQUE KEY `option_name` (`option_name`) USING HASH
) ENGINE = MyISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application users table
CREATE TABLE IF NOT EXISTS `users`
(
    `ID`                  BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_login`          VARCHAR(60)         NOT NULL DEFAULT '',
    `user_pass`           VARCHAR(255)        NOT NULL DEFAULT '',
    `user_salt`           VARCHAR(255)        NOT NULL DEFAULT '',
    `user_nicename`       VARCHAR(50)         NOT NULL DEFAULT '',
    `user_email`          VARCHAR(100)        NOT NULL DEFAULT '',
    `user_url`            VARCHAR(100)        NOT NULL DEFAULT '',
    `user_activation_key` VARCHAR(255)        NOT NULL DEFAULT '',
    `user_status`         INT(11)             NOT NULL DEFAULT 0,
    `display_name`        VARCHAR(250)        NOT NULL DEFAULT '',
    `created`             TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated`             TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `delete`              TIMESTAMP           NULL     DEFAULT NULL,
    PRIMARY KEY (`ID`),
    KEY `user_login_key` (`user_login`),
    KEY `user_nicename` (`user_nicename`),
    KEY `user_email` (`user_email`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application usermeta table
CREATE TABLE IF NOT EXISTS `usermeta`
(
    `umeta_id`   BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id`    BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `meta_key`   VARCHAR(255)                 DEFAULT NULL,
    `meta_value` LONGTEXT                     DEFAULT NULL,
    PRIMARY KEY (`umeta_id`),
    KEY `user_id` (`user_id`),
    KEY `meta_key` (`meta_key`(191))
) ENGINE = MyISAM
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Application orders table
CREATE TABLE IF NOT EXISTS `orders`
(
    `ID`      BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title`   TEXT                NOT NULL,
    `excerpt` TEXT                NOT NULL,
    `content` LONGTEXT            NOT NULL,
    `status`  VARCHAR(20)         NOT NULL DEFAULT 'publish',
    `author`  BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `created` TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated` TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `delete`  TIMESTAMP           NULL     DEFAULT NULL,
    PRIMARY KEY (`ID`),
    KEY `status_created` (`status`, `created`, `ID`),
    KEY `author` (`author`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application ordermeta table
CREATE TABLE IF NOT EXISTS `ordermeta`
(
    `meta_id`    BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `order_id`   BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `meta_key`   VARCHAR(255)                 DEFAULT NULL,
    `meta_value` LONGTEXT                     DEFAULT NULL,
    PRIMARY KEY (`meta_id`),
    KEY `order_id` (`order_id`),
    KEY `meta_key` (`meta_key` (191))
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application order items table
CREATE TABLE IF NOT EXISTS `order_items`
(
    `order_item_id`   BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `order_item_name` TEXT                NOT NULL,
    `order_item_type` VARCHAR(200)        NOT NULL DEFAULT '',
    `order_id`        BIGINT(20) UNSIGNED NOT NULL,
    PRIMARY KEY (`order_item_id`),
    KEY `order_id` (`order_id`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application order_itemmeta table
CREATE TABLE IF NOT EXISTS `order_itemmeta`
(
    `meta_id`       BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `order_item_id` BIGINT(20) UNSIGNED NOT NULL,
    `meta_key`      VARCHAR(255) DEFAULT NULL,
    `meta_value`    LONGTEXT     DEFAULT NULL,
    PRIMARY KEY (`meta_id`),
    KEY `order_item_id` (`order_item_id`),
    KEY `meta_key` (`meta_key` (32))
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application products table
CREATE TABLE IF NOT EXISTS `products`
(
    `ID`      BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title`   TEXT                NOT NULL,
    `excerpt` TEXT                NOT NULL,
    `content` LONGTEXT            NOT NULL,
    `status`  VARCHAR(20)         NOT NULL DEFAULT 'publish',
    `author`  BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `created` TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated` TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `delete`  TIMESTAMP           NULL     DEFAULT NULL,
    PRIMARY KEY (`ID`),
    KEY `status_created` (`status`, `created`, `ID`),
    KEY `author` (`author`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application productmeta table
CREATE TABLE IF NOT EXISTS `productmeta`
(
    `meta_id`    BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `product_id` BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `meta_key`   VARCHAR(255)                 DEFAULT NULL,
    `meta_value` LONGTEXT                     DEFAULT NULL,
    PRIMARY KEY (`meta_id`),
    KEY `product_id` (`product_id`),
    KEY `meta_key` (`meta_key` (191))
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application customers table
CREATE TABLE IF NOT EXISTS `customers`
(
    `ID`      BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title`   TEXT                NOT NULL,
    `status`  VARCHAR(20)         NOT NULL DEFAULT 'publish',
    `author`  BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `created` TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated` TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `delete`  TIMESTAMP           NULL     DEFAULT NULL,
    PRIMARY KEY (`ID`),
    KEY `status_created` (`status`, `created`, `ID`),
    KEY `author` (`author`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application customermeta table
CREATE TABLE IF NOT EXISTS `customermeta`
(
    `meta_id`     BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `customer_id` BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `meta_key`    VARCHAR(255)                 DEFAULT NULL,
    `meta_value`  LONGTEXT                     DEFAULT NULL,
    PRIMARY KEY (`meta_id`),
    KEY `customer_id` (`customer_id`),
    KEY `meta_key` (`meta_key` (191))
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application media table
CREATE TABLE IF NOT EXISTS `media`
(
    `ID`        BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `path`      VARCHAR(255)        NOT NULL,
    `file_size` INT(10)                      DEFAULT NULL,
    `file_ext`  VARCHAR(255)                 DEFAULT NULL,
    `mime_type` VARCHAR(255)                 DEFAULT NULL,
    `status`    VARCHAR(20)         NOT NULL DEFAULT 'publish',
    `author`    BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `created`   TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated`   TIMESTAMP           NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `delete`    TIMESTAMP           NULL     DEFAULT NULL,
    PRIMARY KEY (`ID`),
    KEY `status_created` (`status`, `created`, `ID`)
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;

-- Application mediameta table
CREATE TABLE IF NOT EXISTS `mediameta`
(
    `meta_id`    BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `media_id`   BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,
    `meta_key`   VARCHAR(255)                 DEFAULT NULL,
    `meta_value` LONGTEXT                     DEFAULT NULL,
    PRIMARY KEY (`meta_id`),
    KEY `media_id` (`media_id`),
    KEY `meta_key` (`meta_key` (191))
) ENGINE = MYISAM
  DEFAULT CHARSET = UTF8MB4
  COLLATE = UTF8MB4_UNICODE_CI;
