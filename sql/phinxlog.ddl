CREATE TABLE `phinxlog`
(
    `version`        bigint     NOT NULL,
    `migration_name` varchar(100)        DEFAULT NULL,
    `start_time`     timestamp  NULL     DEFAULT NULL,
    `end_time`       timestamp  NULL     DEFAULT NULL,
    `breakpoint`     tinyint(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (`version`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb3;
