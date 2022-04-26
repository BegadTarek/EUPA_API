<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../core/initialize.php');

$article = new Featured_article($db);

$result = $article->read();

$num = $result->rowCount();

if ($num > 0) {
    $articles_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $item = array(
            'id' => $id,
            'title' => $title,
            'paragraph' => $paragraph,
            'src' => $src,
            'full_article' => $full_article
        );
        array_push($articles_arr, $item);
    }

    echo json_encode($articles_arr);
} else {
    echo json_encode(array('message' => 'No Articles Found'));
}
