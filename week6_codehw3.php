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
$head = '<img src="images/medusa_head.png" width="200" height="200"/>';
$tails = '<img src="images/tanzania_tails.jpg" width="200" height="200"/>';

//1 flip
echo "<h3>"."One Flip"."<h3>";
do{
  //generate a random number
  $flip = mt_rand(0,1);

  //if random number is heads, print Heads
  //if random number is tails, print tails
  /*instead of printing we will use images.*/
    if (mt_rand(0,1) == $h){
      echo $head;
      echo "<h4>"."Heads!"."<h4>";
    }

    else {
      echo $tails;
      echo "<h4>"."Tails!"."<h4>";
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
      echo $head;
      echo "<h4>"."Heads!"."<h4>";
    }

    else {
      echo $tails;
      echo "<h4>"."Tails!"."<h4>";
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
      echo $head;
      echo "<h4>"."Heads!"."<h4>";
    }

    else {
      echo $tails;
      echo "<h4>"."Tails!"."<h4>";
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
      echo $head;
      echo "<h4>"."Heads!"."<h4>";
    }

    else {
      echo $tails;
      echo "<h4>"."Tails!"."<h4>";
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
      echo $head;
      echo "<h4>"."Heads!"."<h4>";
    }

    else {
      echo $tails;
      echo "<h4>"."Tails!"."<h4>";
    }
  --$c9;
  echo "<br>";
}while ($c9>0);

echo "<h3>"."Coin Toss Challenge Part 2"."<h3>";
echo "<p>"."Create a loop to flip coin until you have flipped exactly two heads in a row. Stop the loop, print number of tosses"."<p>";

do{
  //count will hold number of flips
  $count = 0;
  //headcount will hold heads position. Will count until it get's to 2
  $headcount = 0;
  $toss = mt_rand(0,1);

  //If random number is 0 (heads) increase flip count, increase heads count and flip again.
  if ($toss == $h){
    ++$count;
    ++$headcount;
    //if next flip is also heads increase flip count, increase heads count, print "two heads!" and the number of flips.
    $again = mt_rand(0,1);
    if($again == $h){
      ++$count;
      ++$headcount;
      echo "two heads in a row!"."<br>";
      echo "number of flips:". $count."<br>";
    }
    //if next flip is tails, increase flip count, decrease heads count.
    else{
      $toss;
      ++$count;
      --$headcount;
    }
  }
}while($headcount !== 2);
//I keep getting two flips until two heads in a row. Which means i'm getting heads on the first flip and heads on the second. I'm unsure why.

//Funtion Building

function flip_a_coin($x){
$count = $x;
$headcount = 0;
$flips = 0;
$h = 0;
$t = 1;
$toss = mt_rand(0,1);

do {
if($toss == $h){
  --$count;
  ++$headcount;
  ++$flips;
  $again = mt_rand(0,1);
}
  if($again == $h){
  --$count;
  ++$headcount;
  ++$flips;
}
  else{
  $loop = mt_rand(0,1);
  --$count;
  ++$flips;
}
}while($count>0);

echo "<br>"."number of heads:".$headcount."<br>";
echo "number of flips:".$flips."<br>";
}


echo "<h3>"."Coin Toss Challenge Part 3"."<h3>";
echo "Write a function that takes as an argument the number of heads in a row you would want to flip for";
flip_a_coin(8);
?>
<h2>Challenge 2: Book list</h2>
<?php
$bookdata = array(
  array("Title","Author","Pages","Type","Price"),
  array("PHP and MySQL Web Development","Luke Welling",144,"paperback",31.63),
  array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett",135,"paperback",41.23),
  array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar",14,"paperback",40.88),
  array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett",251,"paperback",22.09),
  array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"paperback",28.49),
  array("Programming PHP","Kevin Tatroe",26,"paperback",28.96)
);


echo "<table border=10>";
foreach($bookdata as $row){
  echo "<tr>";
  foreach($row as $item){
    echo "<td>".$item."</td>";
  }
  echo "<tr>";
}
echo "</table>";


 ?>


</body>
</html>
