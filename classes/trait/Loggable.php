<?php

trait Loggable
{
    public function log($message)
    {
        $date = date('Y-m-d H:i:s');
        file_put_contents('log.txt', "[$date] $message\n", FILE_APPEND);
    }
}
