<!DOCTYPE html>
<html>
<head>
  <title>
    Web Development - Code HW 3
  </title>
  <h1>
  Web Development - Code HW 3
  </h1>
</head>
<body>
<h2>Challenge 1: Coin Toss</h2>
<?php
//$flip=mt_rand(0,1);
$c1=1;
$c3=3;
$c5=5;
$c7=7;
$c9=9;
$h = 0;
$t = 1;

//1 flip
echo "<h3>"."One Flip"."<h3>";
do{
  //generate a random number
  $flip = mt_rand(0,1);

  //if random number is heads, print Heads
  //if random number is tails, print tails
  /*instead of printing we will use images.*/
    if (mt_rand(0,1) == $h){
      echo "Heads!"; //the image source shuld go here as well
    }

    else {
      echo "Tails!";
    }
  --$c1;
  echo "<br>";
}while ($c1>0);

//3 flips
echo "<h3>"."Three Flips"."<h3>";
do{
  //generate a random number
  $flip = mt_rand(0,1);

  //if random number is heads, print Heads
  //if random number is tails, print tails
  /*instead of printing we will use images.*/
    if (mt_rand(0,1) == $h){
      echo "Heads!"; //the image source shuld go here as well
    }

    else {
      echo "Tails!";
    }
  --$c3;
  echo "<br>";
}while ($c3>0);

//5 flips
echo "<h3>"."Five Flips"."<h3>";
do{
  //generate a random number
  $flip = mt_rand(0,1);

  //if random number is heads, print Heads
  //if random number is tails, print tails
  /*instead of printing we will use images.*/
    if (mt_rand(0,1) == $h){
      echo "Heads!"; //the image source shuld go here as well
    }

    else {
      echo "Tails!";
    }
  --$c5;
  echo "<br>";
}while ($c5>0);

//7 flips
echo "<h3>"."Seven Flips"."<h3>";
do{
  //generate a random number
  $flip = mt_rand(0,1);

  //if random number is heads, print Heads
  //if random number is tails, print tails
  /*instead of printing we will use images.*/
    if (mt_rand(0,1) == $h){
      echo "Heads!"; //the image source shuld go here as well
    }

    else {
      echo "Tails!";
    }
  --$c7;
  echo "<br>";
}while ($c7>0);

//9 flips
echo "<h3>"."Nine Flips"."<h3>";
do{
  //generate a random number
  $flip = mt_rand(0,1);

  //if random number is heads, print Heads
  //if random number is tails, print tails
  /*instead of printing we will use images.*/
    if (mt_rand(0,1) == $h){
      echo "Heads!"; //the image source shuld go here as well
    }

    else {
      echo "Tails!";
    }
  --$c9;
  echo "<br>";
}while ($c9>0);
?>
<h2>Challenge 2: Book list</h2>
</body>
</html>
