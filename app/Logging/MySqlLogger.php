<?php

namespace App\Logging;

use Monolog\Logger;

class MysqlLogger
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
        $logger = new Logger("MysqlLogHandler");
        return $logger->pushHandler(new MysqlLogHandler());
    }
}
