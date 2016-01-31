<?php

$notlar=[
"Ali"=>84,
"Veli"=>25,
"Hasan"=>45,
"Huseyin"=>70
];

arsort($notlar);

$arrayLength=count($notlar);
$ortalama=array_sum($notlar)/count($notlar);
echo"Ortalama:".$ortalama."<br>";
$toplam=0.0;
$min=$notlar["Ali"];
$minkisi="Ali";
$maxkisi="Ali";
$max=$notlar["Ali"];
foreach($notlar as $ogrenci=>$not){

  if($min>$not){
	$min=$not;$minkisi=$ogrenci;
  }
  if($max<$not){
	$max=$not;$maxkisi=$ogrenci;
  }
  $toplam+=pow($not-$ortalama,2);
}
echo "Minimum= ".$minkisi."->".$min." Maximum=".$maxkisi."->".$max."<br>";
echo "Standart Sapma:".sqrt($toplam/$arrayLength-1);
?>


