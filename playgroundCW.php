<!-- --------------------------------------------------

------ https://www.codewars.com/users/MickaelMd -------

--------------------------------------------------- -->

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

// function between(int $a, int $b): array {
//     $array = [];
    
//     for ($i=$a; $i <= $b; $i++) { 

//         array_push($array, $i);
        
//     };
    
    
//     return $array;
//   }

//   print_r(between(-99,31));



// function removeEveryOther($array) {
 

//     for ($i = count($array) -1; $i >= 0 ; $i--){
//         if (($i % 2) == 1) unset ($array[$i]);
//       }

//     return $array;
//   }

//   print_r( removeEveryOther(["Keep", "Remove", "Keep", "Remove", "Keep", "Romove"]));


// function hero(int $bullets, int $dragons){
//     // throw new Exception("Function not implemented");

//     if ($bullets >= $dragons * 2) {

//         return true;
//     }
//     else {
        
//         return false;
//     }

// }

// echo hero(4, 2);

// function findNeedle($haystack) {
    
//     $test = array_search('needle' , $haystack) ;
//     return 'found the needle at position ' . $test;

// };

// echo findNeedle(["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"]);

// function rpc($p1, $p2) {

//     if ($p1 == $p2) {
//         return 'Draw!';
//     }

//     // Player 1: Scissors, Player 2: Rock
//     if ($p1 == 'scissors' && $p2 == 'rock') {
//         return 'Player 2 won!';
//     }
   
//     if ($p1 == 'rock' && $p2 == 'scissors') {
//         return 'Player 1 won!';
//     }

//     if ($p1 == 'paper' && $p2 == 'rock') {
//         return 'Player 1 won!';
//     }

//     if ($p1 == 'rock' && $p2 == 'paper') {
//         return 'Player 2 won!';
//     }

//     if ($p1 == 'scissors' && $p2 == 'paper') {
//         return 'Player 1 won!';
//     }

//     if ($p1 == 'paper' && $p2 == 'scissors') {
//         return 'Player 2 won!';
//     }
// }

// echo rpc('scissors', 'rock');


// function remove_char(string $s): string {

// return substr($s, 1, -1,);


// }

// echo remove_char('test');

// function makeNegative($num) {
//     if ($num <= 0) {
//         return $num;
//     }
//     else {
//         return - $num;
//     }
// }

// echo makeNegative(-150);



// function maps($x)
// {
//  $newar = [];

//  foreach ($x as $xs) {

//     $test = $xs * 2;

//     array_push($newar, $test);

//  }; 
// return $newar;

// }

// print_r(maps([10, 50, 80]));



// function switch_it_up($number)
// {

//     switch ($number) {
//         case 0:
//             $word = 'Zero';
//             break;
//             case 1:
//                 $word = 'One';
//                 break;
//                 case 2:
//                     $word = 'Two';
//                     break;
//                     case 3:
//                         $word = 'Three';
//                         break;
//                         case 4:
//                             $word = 'Four';
//                             break;
//                             case 5:
//                                 $word = 'Five';
//                                 break;
//                                 case 6:
//                                     $word = 'Six';
//                                     break;
//                                     case 7:
//                                         $word = 'Seven';
//                                         break;
//                                         case 8:
//                                             $word = 'Eight';
//                                             break;
//                                             case 9:
//                                                 $word = 'Nine';
//                                                 break;

//     }

//   return $word;
// }

// echo switch_it_up(8);

function countsheep($num){

    $text = '';
    
        for ($i=1; $i < $num + 1; $i++) { 
    
            $text .= $i . ' sheep...';
            
            
        }
    return $text;
    }
    
    echo countsheep(3);