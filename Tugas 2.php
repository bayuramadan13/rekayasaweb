<?php
// Membuat variabel array
$arrayData = [
    "nama" => "Faezya",
    "usia" => 19,
    "domisili" => "Semarang",
    "hobi" => ["Game", "Dance", "Cooking"]
];

// Encode array ke format JSON
$jsonData = json_encode($arrayData);

// Decode JSON ke object dan array
$objectData = json_decode($jsonData);
$arrayData = json_decode($jsonData, true);

// Mengakses nilai dari PHP Object
echo "Mengakses nilai dari PHP Object: ";
echo "Nama: " , $objectData->nama , " ";
echo "Usia: " , $objectData->usia , " ";
echo "Domisili: " , $objectData->domisili , " ";
echo "Hobi: " , implode(", ", $objectData->hobi) , " ";

// Mengakses nilai dari PHP Array
echo "Mengakses nilai dari PHP Array: ";
echo "Nama: " , $arrayData['nama'] , " ";
echo "Usia: " , $arrayData['usia'] , " ";
echo "Domisili: ", $arrayData['domisili'] , " ";
echo "Hobi: " , implode(", ", $arrayData['hobi']);
?>
