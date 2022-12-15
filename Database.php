<?php

class Database
{
    public $connection;
    function __construct($config, string $username = 'root', string $password = '')
    {
        //data source name 
        $dsn = "mysql:" . http_build_query($config, '', ';');
      
        $this->connection = new PDO($dsn, $username,$password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    public function query(string $query)
    {
        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}
