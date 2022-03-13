CREATE TABLE `exception_reports`
(
    `id`          int unsigned NOT NULL AUTO_INCREMENT,
    `description` varchar(255) NOT NULL DEFAULT '',
    `detail`      json                  DEFAULT NULL,
    `created`     datetime     NOT NULL,
    `modified`    datetime     NOT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;
