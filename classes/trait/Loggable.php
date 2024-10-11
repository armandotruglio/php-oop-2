<?php

trait Loggable
{
    public function log($message)
    {
        if ($message === '') {
            throw new Exception("Logged empty element");
        }
        $date = date('Y-m-d H:i:s');
        file_put_contents('log.txt', "[$date] $message  logged\n", FILE_APPEND);
    }
}
