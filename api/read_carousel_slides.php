<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../core/initialize.php');

$slide = new Carousel_slide($db);

$result = $slide->read();

$num = $result->rowCount();

if ($num > 0) {
    $slide_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $slide_item = array(
            'id' => $id,
            'src' => $src,
            'title' => $title,
            'paragraph' => $paragraph,
            'alt' => $alt
        );
        array_push($slide_arr, $slide_item);
    }

    //convert to JSON and output
    echo json_encode($slide_arr);
} else {
    echo json_encode(array('message' => 'No Slides Found'));
}
