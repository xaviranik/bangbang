<?php

class DBHandler {

    protected $driver;
    protected $host;
    protected $db_name;
    protected $username;
    protected $password;

    protected $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct()
    {
        $this->driver = ENV::$DB['driver'];
        $this->host = ENV::$DB['host'];
        $this->db_name = ENV::$DB['db_name'];
        $this->username = ENV::$DB['username'];
        $this->password = ENV::$DB['password'];
    }

    public function connect()
    {
        try {
            return new PDO($this->getDSN(), $this->username, $this->password, $this->options);
        } catch (PDOException $e) {
            die('Connection could not be eslablished! ' . $e->getMessage());
        }
    }

    protected function getDSN()
    {
        return "$this->driver:host=$this->host;dbname=$this->db_name;";
    }
}