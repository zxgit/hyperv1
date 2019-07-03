<?php
return [
    'consumers' => [
        [
            // The service name, this name should as same as with the name of service provider.
            'name' => 'ConsumerService',
            // The service registry, if `nodes` is missing below, then you should provide this configs.
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://127.0.0.1:8500',//Enter the address of service registry
            ],
            // If `registry` is missing, then you should provide the nodes configs.
            'nodes' => [
                // Provide the host and port of the service provider.
                // ['host' => 'The host of the service provider', 'port' => 9502]
                ['host' => '127.0.0.1', 'port' => 9504]
            ],
        ],
    ],
];