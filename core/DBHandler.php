<?php

class DBHandler {

    protected $driver;
    protected $host;
    protected $db_name;
    protected $username;
    protected $password;

    protected $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct($db)
    {
        $this->driver = $db['driver'];
        $this->host = $db['host'];
        $this->db_name = $db['db_name'];
        $this->username = $db['username'];
        $this->password = $db['password'];
    }

    public function connect()
    {
        try {
            return new PDO($this->getDSN(), $this->username, $this->password);
        } catch (PDOException $e) {
            die('Connection could not be eslablished! ' . $e->getMessage());
        }
    }

    protected function getDSN()
    {
        return "mysql:host=$this->host;dbname=$this->db_name;";
    }
}