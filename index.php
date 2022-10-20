<?php
function writeName($fname) {
  echo "$fname.<br>";
}

writeName("Mateusz"); 




function Pole(int $a, int $h) {
  return ($a * $h)/2;
}
echo Pole(5,3); 




echo "<br>";




function iloczyn(int $a, int $b) {
  return ($a * $b);
}
echo iloczyn(4,3);




echo "<br>";


function czyUjemna(int $t) {
  if ($t < "0") {
    echo "true";
  }
}
echo czyUjemna(-1);


echo "<br>";

function max3(int $a, int $b, int $c){
 echo max($a, $b, $c);



}
echo max3(1,2,3);

function czyPodzielna(int $t) {
  if ($t / 3 ) {
    echo "true</br>";
  }else{
    echo "false</br>";
  }
  if ($t / 5) {
    echo "true</br>";
  }else{
    echo "false</br>";
  }

}
echo czyPodzielna(15);

function BMI(int $waga ,int $wzrost){
$bmi = ($waga)/($wzrost * $wzrost);
echo  "Twoje BMI wynosi $bmi.<br>"; 
if ($bmi < "18.5"){
	echo "Jesteś wygłodzony.";
}elseif ($bmi > "18.5"){
	echo "Twoja waga jest prawidłowa.";
}elseif ("25.00" <= $bmi){
	echo "Masz nadwagę.";
}else{
	echo "LMAO";
}
}
echo BMI(80, 2)
?>