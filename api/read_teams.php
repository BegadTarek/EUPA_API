<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../core/initialize.php');

$team = new Team($db);

$result = $team->read();

$num = $result->rowCount();

if ($num > 0) {
    $teams_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $item = array(
            'id' => $id,
            'acronym' => $acronym,
            'name' => $name,
            'logo_src' => $logo_src,
            'points' => $points,
            'win' => $win,
            'loss' => $loss,
            'tie' => $tie,
            'pa' => $pa,
            'pf' => $pf
        );
        array_push($teams_arr, $item);
    }

    //convert to JSON and output
    echo json_encode($teams_arr);
} else {
    echo json_encode(array('message' => 'No Teams Found'));
}
