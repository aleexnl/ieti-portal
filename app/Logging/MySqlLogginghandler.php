<?php

namespace App\Logging;
// use Illuminate\Log\Logger;
use DB;
use Illuminate\Support\Facades\Auth;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class MySqlLoggingHandler extends AbstractProcessingHandler
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
        // dd($record);   
        $data = array(
            'message'       => $record['message'],
            'level'         => $record['level'],
        );
        DB::connection()->table($this->table)->insert($data);
    }
}
