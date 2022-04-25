<?php

class Featured_article
{
    //database variables
    private $connection;
    private $table = 'featured_articles';

    //article props
    public $id;
    public $title;
    public $paragraph;
    public $src;
    public $full_article;

    //constructor with database connection
    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function read()
    {
        //creating query
        $query = 'SELECT * FROM ' . $this->table;

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
