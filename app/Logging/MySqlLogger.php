<?php

namespace App\Logging;

use Monolog\Logger;

class MySqlLogger
{
    /**
     * Create a custom Monolog instance.
     *
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        $logger = new Logger("MySqlLoggingHandler");
        return $logger->pushHandler(new MySqlLoggingHandler());
    }
}
