<!DOCTYPE html>
<html>
<head>
<h1>
Web Development Week 4-Code HW 1: Correct Change Counter
</h1>
</head>
<body>

  <?php
  $chng = 159;

  $dllr = 100;
  $qtr = 25;
  $dm = 10;
  $nk = 05;
  $pn = 01;


  //first trial, crashed PHP casue while loop jsut keeps going
 /*while ($dllr<=$chng)
  {
    $count = $chng/$dllr;
    echo "Your change is" . round($count) . "dollars and" . $chng % $dllr . "cents" . "<br>";
  }*/

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

  // echo "Your change is X dollar(s), X quarter(s), X dime(s), "


   ?>
