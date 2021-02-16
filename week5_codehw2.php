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

  // in function $i is a given isbn
  //$n splits the isbn
  //count is the number for validation
  function isbn($i){
    //use str_split to break given isbn.
    //variable n holds the array of characters from the ISBN
    $n = str_split($i,1);
    $count = 11;
      foreach($n as $nums){

        //array sum only accepts an array as input, can't do math inside.
        //so I have to do the multiplication, then the array sum, then divide

        //$m is an empty list that I place the products of multiplying into
        //--count decreases the value of count as it's multiplied across the array
        $m[]= $nums * (--$count);

        //$s is a variable holding the sum of the values in the array $m
        //$v is a variable holding the remainder fo the sum divided by 11 (division is done with the modulus)
        $s= array_sum($m);
        $v= $s % 11;
      }

      if($v = 0){
        echo "This ISBN is valid, as are you!";
      }
      else {
        echo "This ISBN is not valid, but you are!";
      }
    }


  isbn($i);
//Question: This "works" in that I get a return value
//but the answer I get is "not valid" even though I used a real ISBN

//also need to figure out how to compensate for ISBNs with x
  ?>
  <h2>
    Challenge 2: Coin Toss
  </h2>

  <?php
  ?>
</body>
</html>
