<?php

namespace App\Singelton;

class Logger extends Singelton
{
        private $file;
        
        protected function __construct()
        {
            $this->file = fopen('C:\OSPanel\domains\patterns\app\Singelton\file\file.txt','w');
        }
        
        public function writeLog(string $message): void
        {
            $date = date('Y-m-d');
            fwrite($this->file, "$date : $message" . "\n");
        }
        
        public static function log(string $message): void
        {
            $logger = static::getInstance();
            $logger->writeLog($message);
        }
         
}












