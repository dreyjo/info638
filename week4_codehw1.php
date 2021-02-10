<!DOCTYPE html>
<html>
<head>
<h1>
Web Development Week 4-Code HW 1:
</h1>
</head>
<body>
  <h2>
    Challenge 1: Correct Change Counter
  </h2>

  <?php
  $chng = 159;

  $dllr = 100;
  $qtr = 25;
  $dm = 10;
  $nk = 05;
  $pn = 01;
  $a = $b = $c = $d = 0;

  $count = array($a, $b, $c, $d);

  /* I need to be able to:
  ge the floor of a given value

  $a = floor($chng/dllr)
  $chng = #chng % $dllr

// sketching new function:
  $n3 = floor($n1/$n2);
  $n1 = $n1%n2;
  */
  function chng_count($n1, $n2)
  {
//$chng = $n1
//$dllr = $n2
    $n3 = floor($n1/$n2);
    return $n3;
  }

 if ($chng > $dllr)
 {
   $a = chng_count($chng, $dllr);
   $chng = $chng - ($dllr * $a);
 }

 if ($chng > $qtr)
 {
   $b = chng_count($chng, $qtr);
   $chng = $chng - ($qtr * $b);
 }

 if ($chng > $dm)
 {
   $c = chng_count($chng, $dm);
   $chng = $chng - ($dm * $c);
 }

 if ($chng > $nk)
 {
   $d = chng_count($chng, $nk);
   $chng = $chng - ($nk * $d);
 }

 echo "Your change is " . $a ;
 if ($a > 1){
   echo " dollars, ";
 }
 else {
   echo " dollar, ";
 }
 echo $b;
 if ($b > 1){
   echo " quarters, ";
 }
 else {
   echo " quarter, ";
 }
 echo $c;
 if ($c <> 1){
   echo " dimes, ";
 }
 else {
   echo " dime, ";
 }
 echo $d;
 if ($d > 1){
   echo " nickels, ";
 }
 else {
   echo " nickel, ";
 }
 echo " and $chng cents.";
 echo "<br>";
 echo "<br>";

?>

<h2>
  Challenge 2: 99 Bottles of Beer on the Wall
</h2>
<?php
//Challenge 2: 99 Bottles of Beer
$bttl = 99;
$pass = $bttl-1;
/*while ($bttl > 0){
  echo "$bttl bottles of beer on the wall, $bttl bottles of beer.";
  echo "<br>";
  echo "Take one down, pass it around, $pass bottles of beer on the wall.";
  echo "<br>";
  if ($pass >0)
  $bttl = $pass;
}*/

//have a count of bottles
//subtract 1 from count of Bottles
//if count of bottle is less than zero,
//save new count of bottles
//repeat

/*do{
  echo "$bttl bottles of beer on the wall, $bttl bottles of beer.";
  echo "<br>";
  echo "Take one down, pass it around, $pass bottles of beer on the wall.";
  echo "<br>";
  if ($pass >0){
      $bttl-1;
  }
}while ($bttl > 0)*/

//using a do...while loop to iterate over the lyrics of the song.
//using the vairbales $pass variable to decrease the number of bottles each run
//nesting an if statement in side the do...while loop to change the number of bottles in the first line of the song for when song repeats
do{
  echo "$bttl bottles of beer on the wall, $bttl bottles of beer." . "<br>";
  if ($pass >1){
    echo "Take one down, pass it around, $pass bottles of beer on the wall." . "<br>";
  }
  else {
    echo "Take one down, pass it around, $pass bottles of beer on the wall." . "<br>";
  }
  $bttl = --$bttl;
}while (--$pass > 0);




/* /first trial, crashed PHP casue while loop jsut keeps going
 while ($dllr<=$chng)
  {
    $count = $chng/$dllr;
    echo "Your change is" . round($count) . "dollars and" . $chng % $dllr . "cents" . "<br>";
  }


  //second trial, works but division is not enough. I need to get the count of how many time a number went into change
  //why does the echo from my function print first?
  echo "Your change is ";
  echo chng_count($chng, $dllr);
  echo " dollars and " . $chng % $dllr . " cents" . "<br>";
  function chng_count($n1, $n2)
  {
//$chng = $n1
//$dllr = $n2
    $n3 = round($n1/$n2,1);
    return $n3;
  }

//this is just here for reference
  $chng = 159;

  $dllr = 100;
  $qtr = 25;
  $dm = 10;
  $nk = 05;
  $pn = 01;

  //thrid trial
  $count = $chng - $dllr;

  if $count < $dllr && < $qtr
    chng_count($chng, $qtr)

  echo "Your change is ";
  echo chng_count($chng, $dllr);
  echo " dollar(s)";


  echo chng_count($chng, $qtr);
  echo " quarter(s)"

  echo chng_count($chng, $dm);
  echo " dime(s)"

  function chng_count($n1, $n2)
  {
//$chng = $n1
//$dllr = $n2
    $n3 = floor($n1/$n2);
    return $n3;
  }
  */


?>
