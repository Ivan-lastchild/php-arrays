<?php

$colors = array(
    array(
        'color' => 'black',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#000',
        ),
    ),
    array(
        'color' => 'white',
        'category' => 'value',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FFF',
        ),
    ),
    array(
        'color' => 'red',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'blue',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#00F',
        ),
    ),
    array(
        'color' => 'yellow',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'green',
        'category' => 'hue',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#0F0',
        ),
    ),
);

$hueCategory = array();
$valueCategory = array();

foreach ($colors as $item){
    foreach ($item as $prop => $key) {
        if($prop === 'category') {
            $key === 'hue' ? array_push($hueCategory, $item) : array_push($valueCategory, $item);
        }
    }
    echo "<pre> ";
    var_dump($item);
    echo "<br>";
}

function showData($array){
    foreach ($array as $item){
        echo  "Це колір " . $item['color']. " він з категорії " .$item["category"]
            .($item['type'] ? " Тип кольору - " .$item["type"]. ".": ""). " В даному кольорі наступні коди rgba "
            .$item["code"]["rgba"]['0'].','.$item["code"]["rgba"]['1'].','.$item["code"]["rgba"]['2'].','.$item["code"]["rgba"]['3']
            . " і такий hex код " .$item["code"]["hex"];
        echo "<br>";
    }
}

showData($hueCategory);
showData($valueCategory);