'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single', 'newrelic'],
            'ignore_exceptions' => false,
        ],

        'newrelic' => [
            'driver' => 'custom',
            'via' => App\Logging\NewRelicLogger::class,
        ],
]
