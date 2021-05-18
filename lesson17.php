<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
  <?php

//     $arr = [1,13,5,17,2,8,6,9,10,];

//   function isNumberinRange($num)
//   {
//     if($num > 0 and $num < 10){
//         return true;
//     } else {
//         return false;
//     }

//   }

//   $newArr = [];
//   foreach ($arr as $key) {
//       if(isNumberinRange($key)){
//           $newArr[] = $key;
//       }
//   }
//   var_dump($newArr);


//   function getDigitsSum($digit)
//   {
//     $sum = 0;
//     while ($digit != 0) {
//         $sum += ($digit % 10);
//         $digit /= 10;
//     }
//     echo $sum;
//   }
// getDigitsSum(589);

// function isNumRange($num)
// {
//   if ($num > 0 and $num < 10) {
//     return true;
    
//   } else {
//     return false;
//   }
// }
// isNumRange(13);


// $arr = [1,3,5,3,7,9,0,15,6,13,11];
// $newArr = [];
// foreach ($arr as $key) {
//   if ($key > 0 and $key < 10) {
//     $newArr[] = $key;
//   }
// }
// var_dump($newArr);



// function getDigitsSum($digit)
// {
//   $sum = 0;
//   while ($digit != 0) {
//     $sum += ($digit % 10);
//     $digit /= 10;
//   }
// return $sum;
// }
// for ($i=1; $i <= 2021; $i++) {
//   if (getDigitsSum($i) == 13) {
//       $newArr[] = $i;
//   }
// }
// var_dump($newArr);

// function isEven($num)
// {
//   if($num % 2 == 0){
//     echo 'true';
//   } else {
//     echo 'false';
//   }
// }
// isEven(4);

// $arr = [1,3,4,5,6,8,7];
// $newArr = [];
// function isEven($num)
// {
//   if($num % 2 == 0){
//    return true;
//   } else {
//    return false;
//   }
// }
// foreach ($arr as $key) {
//   if (isEven($key) == true) {
//     $newArr[] = $key;
//   }
// }
// var_dump($newArr);

// $arr = [1,3,4,5,6,8,7];
// $newArr = [];
// foreach ($arr as $key) {
//   if ($key % 2 == 0) {
//     $newArr[] = $key;
//   }
  
// }
// var_dump($newArr);

// function getDivisors($num)
// {
//   $div = array ();
// for ($i=1; $i < $num ; $i++) {
//     if($num % $i == 0){
//       $div[] = $i;

//     }
//   }
  
//   return $div;
// }
// $div = getDivisors(40);
// var_dump($div);

function getCommonDivisors($a,$b)
{
$div = array();
for ($i=1; $i < $a, $i < $b; $i++) { 
  if ($a % $i == 0) {
    $div[] = $i;
  } elseif ($b % $i == 0) {
    $div[] = $i;
  }

}
return $div;
}
 $div = getCommonDivisors(40,120);
 var_dump($div);



?>

    </body>
</html>