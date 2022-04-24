<?php

class Scheduled_game
{
    //database vars
    private $connection;
    private $table = 'scheduled_games';

    //slide properties
    public $id;
    public $home;
    public $away;
    public $home_score;
    public $away_score;
    public $date;
    public $tournament;


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
