<?php

namespace OwnLogger;

require_once "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class OwnLogger
{

    private $msg;
    private $log;

    public function __construct($msg)
    {
        $this->msg = $msg;
        $this->log = new Logger('Visits');
    }

    public function logVisit(){
        $this->log->pushHandler(new StreamHandler('./Logs/visits.logg', Logger::INFO));
        $this->log->info($this->msg);
    }

    public function logError(){
        $this->log->pushHandler(new StreamHandler('./Logs/visits.logg', Logger::INFO));
        $this->log->error($this->msg);
    }
}
?>