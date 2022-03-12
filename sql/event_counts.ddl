CREATE TABLE `event_counts`
(
    `id`           int unsigned    NOT NULL AUTO_INCREMENT,
    `when_counted` datetime        NOT NULL COMMENT 'Intentional poor design',
    `event_count`  bigint unsigned NOT NULL DEFAULT '0',
    `created`      datetime        NOT NULL,
    `modified`     datetime        NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `when` (`when_counted`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;
