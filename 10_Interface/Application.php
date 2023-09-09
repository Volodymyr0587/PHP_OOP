<?php

require_once 'DatabaseInterface.php';

class Application
{
    public $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }
}