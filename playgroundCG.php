<?php 

// function zeroFuel($distanceToPump, $mpg, $fuelLeft) {
   
//     $distance = $mpg * $fuelLeft;

//     if ($distanceToPump > $distance) {
//         return false; 
//     } else {
//         return true; 
//     }
// }

// echo zeroFuel(50, 25, 8);



// function reverseSeq ($n) {
  

//     $array = [];

//     for ($i=$n; $i > 0; $i--) { 
//       $newn = $n--;
//         array_push($array, $newn);
//      }
//      return $array;


// };

// print_r(reverseSeq(10));

// $input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

// for ($i=count($input); $i > 0; $i--) { 
//     echo $i . '</br>';
// }


// function countPositivesSumNegatives($input) {
     
//     $count = 0;
//     $nbr = -1;
//     $total = 0;
//     $pos = 0;
//     for ($i=count($input); $i > 0; $i--) { 
//         $count++;
//         $nbr++;
//         if ($input[$nbr] < 0) {


//             $total = $total + $input[$nbr];

//         }

//         if ($input[$nbr] > 0) {


//             $pos++;

//         }
        

//     }
//    return $newarray = [$pos, $total];
// }

// print_r( countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]) );



// function countPositivesSumNegatives($input) {
     

//     if (empty($input)) {
//         return [];
//     }

//     $count = 0;
//      $nbr = -1;
//      $total = 0;
//      $pos = 0;
//      for ($i=count($input); $i > 0; $i--) { 
//          $count++;
//          $nbr++;
//          if ($input[$nbr] < 0) {
//              $total = $total + $input[$nbr];
//          }
//          if ($input[$nbr] > 0) {
 
//              $pos++;
//          }
//      }
//     return [$pos, $total];
//  }
//  print_r( countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]) );
//  echo '</br>';
//  print_r( countPositivesSumNegatives([]) );



// function string_to_array($s){
//     return explode(' ', $s);
//   }

//   print_r( string_to_array("I love arrays they are my favorite"));





// function fake_bin(string $s): string {
//     $nbrstr = strlen($s);  
//     $array = str_split($s);  
    
   
//     for ($i = 0; $i < $nbrstr; $i++) {
       
//         if ($array[$i] < 5) {
//             $array[$i] = '0';  
//         } else {
//             $array[$i] = '1'; 
//         }
//     }

//     $result = implode('', $array);  
//     return $result;
// }

// echo fake_bin("123456789");
// $a = 1; $b = 9;
// $array = [];
// for ($i=$a; $i < $b; $i++) { 

//     array_push($array, $i);
    
// };

// print_r($array);

function between(int $a, int $b): array {
    $array = [];
    
    for ($i=$a; $i <= $b; $i++) { 

        array_push($array, $i);
        
    };
    
    
    return $array;
  }

  print_r(between(-99,31));