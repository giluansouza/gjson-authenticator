# gjson-authenticator
Example of two-factor authentication with Google Authenticator

Primeiro crie a table users no banco de dados para armazenar a chave secreta gerada pelo Google Authenticator.
```
CREATE TABLE `users` (
    `id` int(10) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `code_authenticator` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
