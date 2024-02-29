create table filghts
(
    id         int auto_increment
        primary key,
    code       char(10)                            not null,
    city       varchar(100)                        not null,
    country    char(2)                             not null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    updated_at timestamp                           null,
    CONSTRAINT code_unique UNIQUE (code)
)
    collate = utf8mb4_unicode_ci;