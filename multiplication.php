<?php

// echo $number = $_POST["number"];

// echo '<br />';

// for ($i=1; $i<=10; $i++) {
//     echo $number . ' x ' . $i . ' = ' . $number*$i . '<br />';
// }

$number1 = $_POST["A"];
$number2 = $_POST["B"];
$number3 = $_POST["C"];

if ($number1 > $number2 && $number1 > $number3){
        echo "Biggest number is A:" . $number1;
} 
 elseif ($number2 > $number3 && $number2 !== $number3 && $number2 !== $number1){
    echo "Biggest number is B:" . $number2;
} elseif ($number3 > $number2 && $number3 !== $number1) {
    echo "Biggest number is C: " . $number3;
} else  {
    echo "No biggest number";
}
?>