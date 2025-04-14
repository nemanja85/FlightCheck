CREATE TABLE flights (
                         id INTEGER PRIMARY KEY AUTOINCREMENT,
                         code CHAR(10) NOT NULL,
                         city VARCHAR(100) NOT NULL,
                         country CHAR(2) NOT NULL,
                         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                         updated_at TIMESTAMP,
                         CONSTRAINT code_unique UNIQUE (code),
--                          CONSTRAINT country_format CHECK (LENGTH(country) = 2),
--                          CONSTRAINT code_length CHECK (LENGTH(code) = 10)
);
