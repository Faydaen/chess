<?php


$data = [
    [
        "id" => 1,
        "text" => "e4 e5 - открытый дебют",
        "children" => false
    ],
    [
        "id" => 2,
        "text" => "d4 d5 - закрытый дебют",
        "state" =>     [
            "opened"    => true ,
            "disabled"  => false,
            "selected"  => false,
        ],
        "children" => [
            [
                "id" => 21,
                "text" => "c4 * - ферзевой гамбит",
                "children" => false
            ],
        ]
    ],
];

header("Content-type: application/json; charset=utf-8");
echo json_encode($data);
