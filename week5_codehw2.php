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
  //176/11 = 16

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

  echo "ISBN is $i" . "<br>";
  isbn($i);
//Question: This "works" in that I get a return value
//but the answer I get is "not valid" even though I used a real ISBN

//also need to figure out how to compensate for ISBNs with x
  ?>
  <h2>
    Challenge 2: Coin Toss
  </h2>

  <?php
  // Logic Planning:

  /*Goal:
  1. flip a coin - heads or tails
  2. Use images to show heads or tails
  3. use mt_rand with a minmum and maximum to generate a number */

  //Set variables for heads and tails
/*  $h = 0;
  $t = 1;
  //later we can also set our image(s) to appear depending on the number

  if (mt_rand(0,1) == $h){
    echo "Heads!"; //the image source shuld go here as well
  }

  else {
    echo "Tails!";
  */


  /*
  //So a funtion might look like
  /*function flip(){
  $h=0;
  mt_rand(0,1);
  $fs = array(1,2,3,4,5,6,7,8,9);
  $f1 = substr
  $f3 =
  $f5 =
  $f7 =
  $f9 =

  foreach

}*/


//Logic Planning:

//We need to randomly generate a value as our coin flip
//for mt_rand 0 is the minum value and 1 is the maximum.
//just need binary values
mt_rand(0,1)

We need to have a variable that will hold the outcome of our flip
$v[] = mt_rand(0,1)

array_count_values($v)

//for 1 flip
//for 3 flips
//for 5 flips
//for 7 flips
//for 9 flips

We need to repeat mt_rand
*/
  ?>
</body>
</html>
