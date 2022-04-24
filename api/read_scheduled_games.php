<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../core/initialize.php');

$game = new Scheduled_game($db);

$result = $game->read();

$num = $result->rowCount();

if ($num > 0) {
    $games_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $game_item = array(
            'id' => $id,
            'home' => $home,
            'away' => $away,
            'home_score' => $home_score,
            'away_score' => $away_score,
            'date' => $date,
            'tournament' => $tournament
        );
        array_push($games_arr, $game_item);
    }

    //convert to JSON and output
    echo json_encode($games_arr);
} else {
    echo json_encode(array('message' => 'No Games Found'));
}
