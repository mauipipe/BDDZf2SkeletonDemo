<?php
return array(
    'doctrine' => array(
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOSqlite\Driver',
                'params' => array(
                    'Charset'=> 'Utf8',
                    'path'=> __DIR__.'/../../data/store'
                )
            )
        )
    ),
);