<?php

class Carousel_slide
{
    //database vars
    private $connection;
    private $table = 'carousel_slides';

    //slide properties
    public $id;
    public $src;
    public $title;
    public $paragraph;
    public $alt;

    //constructor with database connection
    public function __construct($db)
    {
        $this->connection = $db;
    }

    //reading carousel slides
    public function read()
    {
        //creating query
        $query = 'SELECT * FROM ' . $this->table;

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
