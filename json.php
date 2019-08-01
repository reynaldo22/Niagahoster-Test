<?php
$data = [];
$array_price=[
    'bayi'=>[
        'price'=>19900,
        'discount'=>14900,
        'best'=>'false'
    ],
    'pelajar'=>[
        'price'=>46900,
        'discount'=>23450,
        'best'=>'false'
    ],
    'personal'=>[
        'price'=>58900,
        'discount'=>38900,
        'best'=>'true'
    ],
    'bisnis'=>[
        'price'=>109900,
        'discount'=>65900,
        'best'=>'false'
    ],
];
$data = $array_price;

echo json_encode($data);
?>
