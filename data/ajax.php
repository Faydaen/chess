<?php


$data = [
    [
        "id" => 1,
        "text" => "test",
        "children" => false
    ]

];

header("Content-type: application/json; charset=utf-8");
echo json_encode($data);
