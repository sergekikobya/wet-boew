<?php
return [
    'db' => [
        'dsn' => 'mysql:host=localhost;dbname=bermex;charset=utf8mb4',
        'user' => 'root',
        'pass' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ],
    ],
    'app' => [
        'base_url' => '/',
        'name' => 'BERMEX',
        'env' => 'dev',
        'timezone' => 'Africa/Dakar',
    ],
    'security' => [
        'session_name' => 'bermex_session',
        'csrf_key' => 'change-me-please-32-bytes-min',
    ],
    'mail' => [
        'from' => 'no-reply@bermex.local',
    ],
];

