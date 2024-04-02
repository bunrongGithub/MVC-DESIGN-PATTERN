<?php

namespace Core;
class Database
{
    public $connection;
    public $statement;

    public function __construct ( $config , $username = 'root' , $password = '' )
    {
        $dsn = "mysql:" . http_build_query( $config , '' , ';' );
        $this -> connection = new \PDO( $dsn , $username , $password , [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ] );
    }

    public function query ( $query , $param = [] )
    {
        $this -> statement = $this -> connection -> prepare( $query );
        $this -> statement -> execute( $param );
        return $this;
    }

    public function get ()
    {
        return $this -> statement -> fetchAll();
    }
}