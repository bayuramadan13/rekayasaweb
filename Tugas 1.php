<?php
// Membuat variabel array
$arrayData = [
    "nama" => "Faezya",
    "usia" => 19,
    "domisili" => "Semarang",
    "hobi" => ["Game", "Dance", "Cooking"]
];

// Encode array ke format JSON
$arrayData = json_encode($arrayData);
echo "Data dalam format JSON: " , $arrayData;
?>