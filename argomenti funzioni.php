<!DOCTYPE html>
<html>
<body>

<?php
//si possono usare tutti gli argomenti che si vogliono, basta separarli con la virgola
function myfunction($name,$date) {
    echo "$name was born in the $date";
}

myfunction("Giuseppe","1997");


//dichiarare ad inizio funzione declare(strict_types=1); per rendere inutilizzabili come numeri i numeri delle stringhe
declare=(strict_types=1);

function sommanumeri($num1,$num2) {
    echo $num1+$num2;
}

sommanumeri(5,"5 giorni");


//argomento di default
function myfunction($var="Argomento di default") {
    echo $var;
}

myfunction();


//return
function somma(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . somma(5,10) . "<br>";
  echo "7 + 13 = " . somma(7,13) . "<br>";
  echo "2 + 4 = " . somma(2,4);


// trasformare un argomento in una referenza
function add(&$var) {
    $var +=5;
}

$var2=2;
add($var2);
echo $var2;

?>
 
</body>
</html>