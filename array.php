<?php
// 1
$colors = array('white', 'green', 'red');
$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that 
moment: the ".$colors[2]. " carpet, the " . $colors[1] ." lawn, the " . $colors[0] ." house, the leaden sky
. The new president and his first lady. - Richard M. Nixon";
echo $paragraph;

//========================================
// 2


echo"
   <ul> 
   <li>" . $colors[1] ."</li>
   <li>" . $colors[2] ."</li>
   <li>" . $colors[0] ."</li>
   </ul>
";

// ===========================================
// 3

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> 
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => 
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);

foreach($cities as $country => $capital){
    echo"<h4>The capital of  " . $country ." is " . $capital . "</h4>";
}


// =============================================
// 4

 $color = array (4 => 'white', 6 => 'green', 11=> 'red');
 echo $color[4] ."<br>";

//  ===========================================
// 6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c " => "apple");

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo trim($key) . " = " . $value . "<br>";
}

// ===========================================
// 7

$temperature=array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$avgTemperature=array_sum($temperature)/ count($temperature);

echo"<h4> Average Temperature is: ". round($avgTemperature ,1) ."</h4>";

sort($temperature);

echo "List of seven lowest temperatures: ";

for ($i = 0; $i < 7; $i++) {
    
   echo $temperature[$i]." ";
}

rsort($temperature);
echo"<br> List of seven ighest temperatures: ";
for ($i = 0; $i < 7; $i++) {
    
   echo $temperature[$i]." ";
}

// ==============================
// 8

$array1 = array("color" => "red", 2, 4); 
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid"
, 4); 

$arrays=array_merge($array1,$array2);
echo "<br>";
echo "<br>";
echo "<pre>";
print_r($arrays);
echo"</pre>";


// ====================================
// 9

$colors1 = array("red","blue", "white","yellow"); 

echo "<br>";
echo "<br>";
// print_r($colors1);
foreach($colors1 as $color){
   echo "<pre>";
   echo strtoupper($color)."<br>" ;
   echo"</pre>";
}

// ===================================
// 10

echo "<br>";
echo "<br>";
foreach($colors1 as $color){
   echo strtolower($color)."<br>" ;
}

// ===================================
// 11

echo "<br>";
echo "<br>";

$num=array();
 for($i =200 ; $i<=250 ; $i++){
   if($i % 4 == 0){
      array_push($num , $i);
      echo $i . " ";
   }
 }

//======================================
// 12

echo "<br>";
echo "<br>";

$words =  array("abcd","abc","de","hjjj","g","wer") ;
$wordLength = array();

foreach($words as $word){
   array_push($wordLength,strlen($word));
   // $wordLength[]=strlen($word);
}

echo "The shortest array length is " . min($wordLength) . " <br>";
echo "The longest array length is " . max($wordLength) . "<br>";

// ====================================
// 13

echo "<br>";
echo "<br>";

$numbersRandom = range(11, 20);

shuffle($numbersRandom);

for ($i = 0; $i < 10; $i++) {
    echo $numbersRandom[$i] . " ";
}

// =================================
// 14

echo "<br>";
echo "<br>";
$array1 = array( 2, 0, 10, 12, 6);

// if( $i=0 ; $i >= 6; $i++ ) {
//    echo " ";
// }

?>














