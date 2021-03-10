<?php

namespace App\Logging;
// use Illuminate\Log\Logger;

use App\Models\Log;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class MysqlLoghandler extends AbstractProcessingHandler
{
    /**
     *
     * Reference:
     * https://github.com/markhilton/monolog-mysql/blob/master/src/Logger/Monolog/Handler/MysqlHandler.php
     */
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        $this->table = 'logs';
        parent::__construct($level, $bubble);
    }
    protected function write(array $record): void
    {
        $log = new Log;
        $log->user_id = $record['context']['user_id'];
        $log->mail = $record['context']['user_email'];
        $log->level = $record['level'];
        $log->message = $record['message'];
        $log->save();
    }
}
