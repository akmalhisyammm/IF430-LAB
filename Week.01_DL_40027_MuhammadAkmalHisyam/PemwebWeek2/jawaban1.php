<?php
$negara = array(
  "India" => array(
    "ibuKota" => "New Delhi",
    "kodeTel" => 91,
    "mataUang" => "INR"
  ),
  "Indonesia" => array(
    "ibuKota" => "Jakarta",
    "kodeTel" => 62,
    "mataUang" => "IDR"
  ),
  "Japan" => array(
    "ibuKota" => "Tokyo",
    "kodeTel" => 81,
    "mataUang" => "JPY"
  )
);

foreach ($negara as $nama => $atribut) {
  echo "<strong><i>{$atribut['ibuKota']}</i></strong> is capital city of <strong>{$nama}</strong>. <u>{$nama}'s calling code is {$atribut['kodeTel']} and has \"{$atribut['mataUang']}\" as currency code.</u><br>";
}
