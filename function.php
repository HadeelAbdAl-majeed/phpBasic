<?php

// $num= 4;
// function  primeNumber(num){

// if($num <= 1 || $num % 2 === 0){
//   return "Not prime";
// }elseif($num === 2){
//   return ""
// }


// }

// ====================================
// 2

$word="remove";

function reverseString($word){
  
  echo strrev($word) . "<br>";
}

reverseString($word);

// ===================================
// 3
function charactersLower($word){

if(ctype_lower($word)){
    echo "Your String is Ok <br>";
}else{
    echo "Your String is Not Ok <br>";
}

}

charactersLower($word);
// ====================================
// 4

$number1=10;
$number2=20;

function  swapVariables($number1 , $number2){
   $swap = $number2;
   $number2=$number1;
   $number1=$swap;

   echo "<h3> number1 = " . $number1." number2 = ". $number2 ." </h3>";

}

echo "<h3> number1 = " . $number1." number2 = ". $number2 ." </h3>";
swapVariables($number1 ,$number2);

// =======================================
// 6


$numA=9474;
// 407
function armstrongNumber($numbersA){
  
 $numberAString= (string)$numbersA;
 $numberslenght=strlen($numberAString);
 $sum=0;

 for($i=0 ; $i < $numberslenght;$i++)
    {
        $digit=(int)$numberAString[$i];
        $sum += pow($digit, $numberslenght);
    }

    if($sum == $numbersA){
        echo $numberAString . " is an Armstrong number. <br>";
    }else{
        echo $numberAString ." is not an Armstrong number. <br>";
    }
 
}

armstrongNumber($numA);

// ========================================
// 7

// $paragraph="Eva, can I see bees in a cave";
// $paragraphTrim=trim($paragraph);
// function palindrome($paragraph){
//    for($i=0; $i <= strlen($paragraph)/2; $i++ ){
//       for( $j = strlen($paragraph) ; $j <= strlen($paragraph)\2 ; $j--){
           
//       }
//    }
// }


?>