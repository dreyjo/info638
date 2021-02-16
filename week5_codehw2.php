<!DOCTYPE html>
<html>
<head>
  <title>
    Web Development-Code HW 2
  </title>
  <h1>
    Web Development - Week 5 - Code HW 2
  </h1>
</head>
<body>
  <h2>
    Challenge 1: ISBN Validation
  </h2>
  <?php
  //We need to be able to validate ISBN numbers.
  //Logic planning:

  //We need:
  //a place to hold ISBN numbers as a string?
  // -- if there is time experiment with forms and making this input-able
  // a funtion thst will split the ISBN into single numbers.
  // times each number in the ISBN by an array of numbers? 10:1?
  // sum the total and divide by 11
  // if the quotient has no remainder (modulo?) return "ISBN is valid!"
  //if the quotient has a remainder return "ISBN is not valid!"

  // Logic Building:

  //ISBN for Dear Science
  $i = 1478011041;
  //(10*1) + (9*4) + (8*7) + (7*8) + (6*0) + (5*1) + (4*1) + (3*0) + (2*4) + (1*1)
  //sum = 176
  //176/11 = 16 (no remainder)


  //$n = explode(" ", $i);
  //$n = str_split($i,1);

  //print_r($n);

  function isbn($i){
    $n = str_split($i,1);
    $count = 11;

      foreach($n as $t) {
        --$count;
        $t = array_sum($n * $count);

        return $t;
    }


  }

  isbn($i);

  //Feb14th Problems:
  //currently array_sum gives an erryr saying it expects an array
  //so str_split isn't creating an array just spllitting our given string

  //secondly our count varaible is going up from 1 as it goes across our array.




  //where $i is a variable holding an isbn
  /*
  function isbn($i){
    $n = explode(" ", $i);
    $count = 10;
    foreach($n as $item){

    /*$v= array_sum($item * (--$count));*/
  //  $v=$count*$item;
  //  echo "($count x $item = ()";
    /*return $t;*/
//  }
//}
//  isbn($i);
/*  if sum % > 0
  return echo "ISBN is not valid!"

  else
  echo "ISBN is valid!"

}
  */
  ?>
  <h2>
    Challenge 2: Coin Toss
  </h2>
</body>
</html>
