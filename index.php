<?php


$liczba = 10;
       
$silnia = 1;
for ($i=1; $i<=$liczba; $i++) {
    $silnia *= $i;
}
echo ("$liczba! = $silnia");

echo "</br>";
echo "</br>";

for ($x = 0; $x <= 5; $x++) {
	switch ($x)
	{
	case 1:
	echo "*</br>";
	break;
    case 2:
	echo "**</br>";
	break;
	case 3:
	echo "***</br>";
	break;
	case 4:
	echo "****</br>";
	break;
    case 5:
    echo "*****</br>";
    break;
	default:
	echo "";
	break;
	}
  } 
  echo "</br>";
  echo "</br>";

  for ($x = 0; $x <= 9; $x++) {
	switch ($x)
	{
	case 1:
    case 9:
	echo "*</br>";
	break;
    case 2:
    case 8:
	echo "**</br>";
	break;
	case 3:
    case 7:
	echo "***</br>";
	break;
	case 4:
    case 6:
	echo "****</br>";
	break;
    case 5:
    echo "*****</br>";
    break;
	default:
	echo "";
	break;
	}
  } 

  echo "</br>";
  echo "</br>";
  

  echo'<table border=1 cellpadding=0 cellspacing=0>';
  for ($height = 1; $height <= 10; $height++){
    echo"<tr>";
        for ($width = 1; $width <= 10; $width++){
            echo "<td>";
                echo $width * $height;


        }
        echo"<tr>";

  }
        echo"</table>";
       
?>