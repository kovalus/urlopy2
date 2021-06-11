<?php

class Mysql extends PDO
{
    public function __construct($db)
    {
        parent::__construct($db['DB_TYPE'] . ':host=' . $db['DB_HOST'] . ';dbname=' . $db['DB_NAME'], $db['DB_USER'], $db['DB_PASS']);
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
