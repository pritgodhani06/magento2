<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '2czlTZG3095cIz7vaJK8YdlhDvxwlCiD'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '76c_'
            ],
            'page_cache' => [
                'id_prefix' => '76c_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64v703eZcPzMFXB0dbnmIAke2fEYzonK1W8HpBFdj36kE='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento2',
                'username' => 'root',
                'password' => 'NewPassword123!',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'magewire' => 1,
        'hyva_checkout' => 1
    ],
    'downloadable_domains' => [
        'magento248.local.com',
        'localhost'
    ],
    'system' => [
        'default' => [
            'catalog' => [
                'search' => [
                    'engine' => 'opensearch',
                    'opensearch_server_hostname' => '192.168.1.180',
                    'opensearch_server_port' => '9800',
                    'opensearch_index_prefix' => 'magento234',
                    'opensearch_enable_auth' => '1',
                    'opensearch_username' => 'admin',
                    'opensearch_password' => 'Ethinfo@99',
                    'opensearch_server_timeout' => '15'
                ]
            ]
        ]
    ],
    'install' => [
        'date' => 'Thu, 25 Dec 2025 07:06:51 +0000'
    ]
];
