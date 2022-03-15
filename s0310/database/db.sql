CREATE TABLE `db_0310`.`students` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    `chinese` INT(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `email_verified_at`,
        `password`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        NULL,
        'admin2',
        'admin2@abc.com',
        NULL,
        '12345',
        NULL,
        NULL,
        NULL
    );

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `email_verified_at`,
        `password`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        NULL,
        'admin3_1',
        'admin3_1@abc.com',
        NULL,
        '12345',
        NULL,
        NULL,
        NULL
    );

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `email_verified_at`,
        `password`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        NULL,
        'admin3_2',
        'admin3_2@abc.com',
        NULL,
        '12345',
        NULL,
        NULL,
        NULL
    );

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `email_verified_at`,
        `password`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        NULL,
        'admin3_3',
        'admin3_3@abc.com',
        NULL,
        '12345',
        NULL,
        NULL,
        NULL
    );


    INSERT INTO users 
    (id, name, email, email_verified_at, password, remember_token, created_at , updated_at) 
    VALUES 
    (NULL, 'test02', 'test02@abc.com', NULL, '12345', NULL, NULL, NULL),
    (NULL, 'test03', 'test03@abc.com', NULL, '12345', NULL, NULL, NULL),
    (NULL, 'test04', 'test04@abc.com', NULL, '12345', NULL, NULL, NULL),
    (NULL, 'test05', 'test05@abc.com', NULL, '12345', NULL, NULL, NULL),
    (NULL, 'test06', 'test06@abc.com', NULL, '12345', NULL, NULL, NULL);