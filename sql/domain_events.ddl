CREATE TABLE `domain_events`
(
    `id`            bigint unsigned NOT NULL AUTO_INCREMENT,
    `source_id`     bigint unsigned NOT NULL,
    `source_table`  varchar(255)    NOT NULL,
    `action`        varchar(255)    NOT NULL DEFAULT '',
    `subsystem`     varchar(255)    NOT NULL DEFAULT '',
    `description`   varchar(255)    NOT NULL DEFAULT '',
    `detail`        json                     DEFAULT NULL,
    `event_uuid`    char(36)        NOT NULL,
    `when_occurred` timestamp(6)    NOT NULL,
    `created`       datetime        NOT NULL,
    `modified`      datetime        NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `event_uuid` (`event_uuid`),
    UNIQUE KEY `source_id` (`source_id`, `source_table`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;
