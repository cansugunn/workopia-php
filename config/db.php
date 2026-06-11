
<?php

return [
    'host' => getenv('DB_HOST') ?: 'host.docker.internal',
    'port' => getenv('DB_PORT') ?: 3306,
    'dbname' => getenv('DB_NAME') ?: 'workopia',
    'username' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASS') ?: '12345678'
];
