<?php

class Team
{
    //database vars
    private $connection;
    private $table = 'teams';

    //teams properties
    public $id;
    public $acronym;
    public $name;
    public $logo_src;
    //league details
    public $points;
    public $win;
    public $loss;
    public $tie;
    //points for & against
    public $pa;
    public $pf;




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
