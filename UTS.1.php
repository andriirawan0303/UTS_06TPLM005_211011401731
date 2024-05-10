<?php

// Data tim dan poin
$tim = array(
    "Qatar" => 6,
    "Indonesia" => 3,
    "Australia" => 1,
    "Yordania" => 0
);

// Urutkan data berdasarkan poin (tertinggi ke terendah)
arsort($tim);

// Tampilkan tabel klasemen
echo "<h1>Klasemen Piala Asia U-23 Qatar Grup A</h1>";
echo "<table border=1>";
echo "<tr><th>Tim</th><th>Poin</th></tr>";
foreach ($tim as $key => $value) {
    echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
}
echo "</table>";

?>
