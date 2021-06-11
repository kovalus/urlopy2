<?php

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = new Mysql(
            array(
                'DB_TYPE' => DB_TYPE, 'DB_HOST' => DB_HOST, 'DB_NAME' => DB_NAME, 'DB_USER' => DB_USER, 'DB_PASS' => DB_PASS
            )
        );
        // var_dump($this->db);
    }
}
