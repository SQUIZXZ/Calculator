<?php

echo "<body style='background-color:#436060'>";

$number1=$_POST["number1"];
$number2=$_POST["number2"];

if(isset($_POST['Calculate'])) {

  function Calculating () {

    $number1=$_POST["number1"];
    $Operation=$_POST["Operations"];
    $number2=$_POST["number2"];

    switch($_POST["Operations"]) 
    {
      case "add":
      $answer = $number1 + $number2;
      return $answer;
      break;

      case "subtract":
      $answer = $number1 - $number2;
      return $answer;
      break;

      case "multiply":
      $answer = $number1 * $number2;
      return $answer;
      break;

      case "divide":
      $answer = $number1 / $number2;
      return $answer;
      break;

      default: echo "No operation";
    }
  }
  echo "Answer = ".Calculating();
}

elseif(isset($_POST['Times'])) {

  function times($number1,$number2){

    for ($i=1; $i<=$number2; $i++){
      echo $i."x".$number1."=".$i*$number2."<br>";
    }
  }
  times($number1,$number2);
}

elseif(isset($_POST['Factor'])){

  echo "Factoring :"."<br>";
  function factor($number1,$number2){

    for($i=1;$i<=$number1-1;$i++)
    {
      $number2*=($i+1);
    }
  }
  echo $number1." goes into ".$number2."=".$number3 = $number2/$number1." times"."<br>"."<br>";
  echo "Square root of second number is :"."<br>".sqrt($number2);
}

elseif(isset($_POST['convert'])){

  $number4 = isset($_POST['number4']) ? $_POST['number4'] : 0;
  $choose = isset($_POST['select']) ? $_POST['select'] : '';

  switch ($choose)
  {
    case 'meter':
    $cm      = $number4 * 100;
    $foot    = $number4 * 3.2808;
    $inches  = $number4 * 39.370;
    $Answer  = 'Meters: '.$number4.'<br/>'.
    'Cm: '.$cm.'<br/>'.
    'Feet: '.$foot.'<br/>'.
    'Inches: '.$inches; break;
    case 'cm':
    $meter   = $number4 / 100;
    $foot    = $number4 * 0.032808;
    $inches  = $number4 * 0.39370;
    $Answer  = 'Cm: '.$number4.'<br/>'.
    'Meters: '.$meter.'<br/>'.
    'Feet: '.$foot.'<br/>'.
    'Inches: '.$inches;break;

    case 'foot':
    $meter   = $number4 / 3.2808;
    $cm      = $number4 / 0.032808;
    $inches  = $number4 * 12.000;
    $Answer  = 'Feet: '.$number4.'<br/>'.
    'Meters: '.$meter.'<br/>'.
    'Cm: '.$cm.'<br/>'.
    'Inches: '.$inches;break;

    case 'inches':
    $meter   = $number4 / 39.370;
    $cm      = $number4 / 0.39370;
    $foot    = $number4 / 12.000;
    $Answer  = 'Inches: '.$number4.'<br/>'.
    'Feet: '.$foot.'<br/>'.
    'Meters: '.$meter.'<br/>'.
    'Cm: '.$cm;break;

    default:
    $Answer  = '';break;
  }

  echo $Answer;
}
?>
<br>
<form action="calculator.php">
  <input type="submit" value="Again?" />
</form>
