<?php

// Настроить доступ к базе в конфиге db.php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=192.168.0.157:3306;dbname=yii2basic',
    'username' => 'root',
    'password' => '123123',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
