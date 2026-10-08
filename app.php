
<?php

// 1
$year = 2013;
if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "This is a leap year <br> ";
} else {
    echo "This is not a leap year <br>";
}

// =======================================
// 2

$temp = 27;

if ($temp < 20) {
    echo "Winter <br>";
} else {
    echo "Summer <br>";
}

// ======================================
// 3

$firstNumber = 4;
$secoudNumber = 3;

if ($firstNumber == $secoudNumber) {
    $result = ($firstNumber + $secoudNumber) * 3;
    print $result . "<br>";
} else {
    $result = $firstNumber + $secoudNumber;
    print $result . "<br>";
}

// =======================================
// 4

$num = 15;

if ($num % 3 == 0) {
    echo "TRUE <br>";
} else {
    echo "FALSE <br>";
}

// =========================================
// 5

$rangeNumber = 60;

if ($rangeNumber >= 20 && $rangeNumber >= 50) {
    echo "TRUE <br>";
} else {
    echo "FALSE <br>";
}


//============================================
// 6

$num1 = 4;
$num2 = 1;
$num3 = 5;

if ($num1 >= $num2 && $num1 >= $num3) {
    print "the largest number " . $num1 . "<br>";
} elseif ($num1 <= $num2 && $num2 >= $num3) {
    print "the largest number " . $num2 . "<br>";
} else {
    print "the largest number " . $num3 . "<br>";
}
// ==========================================
// 7



// ==========================================
// 8

$operations="addition";
$number1 =20;
$number2=10;


if($operations == "addition"){
    echo $number1 + $number2;
}elseif($operations == "subtraction"){
    echo $number1 - $number2;
}elseif($operations == "multiplication"){
    echo $number1 * $number2;
}else {
    echo $number1 / $number2;
}


// ========================================
// 9

$bill = 0;
$units = 400;

    if ($units <= 50) {
        $bill = $units * 2.5;
    } elseif ($units <= 100) {
        $bill = (50 * 2.5) + (($units - 50) * 5.0);
    } elseif ($units <= 200) {
        $bill = (50 * 2.5) + (100 * 5.0) + (($units - 100) * 6.20);
    } else {
        $bill = (50 * 2.5) + (100 * 5.0) + (100 * 6.20) + (($units - 200) * 7.50);
    }

    echo "The electricity bill is " . $bill . "<br>";


// ==============================================
// 10

$age =15;

if($age >= 18 ){
    echo"is eligible to vote <br>";
}else{
   echo"is no eligible to vote <br>"; 
}


// ============================================
// 11

$whether=-15;

if($whether > 0){
    echo"Positive <br>";
}elseif($whether == 0){
    echo"Zero <br>";
}else{
    echo"Negative <br>";
}

// =========================================
// 12

$arr=array(59 , 80 ,88 ,67,90,89 , 78);

$avg=array_sum($arr) / count($arr);

if($avg >= 90){
    echo"A <br>";
}elseif($avg >= 80){
    echo"B <br>";
}elseif($avg >= 70){
    echo"C <br>";
}elseif($avg >= 60){
    echo"D <br>";
}else{
    echo"F <br>";
}

// =========================================





?>