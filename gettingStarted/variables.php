<!-- Variable Scope -->
<?php
  $a = 10;
  function try_it(){
    $a = 7;
    $b = 3;
    echo $a;
    echo $b;
  }
  try_it();
  // echo $a;
  // echo $b; // Causing error "The 'B' variable is private in 'try_it' function"
?>
<!-- Variable Global -->
<?php
  $c = 10;
  function try_now(){
    global $c;
    global $d;
    $c = 20;
    $d = 30;
    // echo $c;
    // echo $d;
  }
  try_now();
  echo $c;
  echo $d;
?>
<!-- Variable Static -->
<?php
  function try_this(){
    // Using static for a "Static" value in a variable
    static $a = 0;
    $a = $a + 1;
    return "My number is $a <br/>";
  }
  echo try_this();
  echo try_this();
  echo try_this();
  echo try_this();
  echo try_this();
?>
<!-- Task 1 : Make only "mobil2" and "mobil5" are able to call -->
<?php
  $mobil2 = 'Mazda<br/>';
  $mobil5 = 'Toyota<br/>';
  function bruh(){
    $mobil1 = 'Mitsubishi<br/>';
    $mobil2 = 'Mazda<br/>';
    $mobil3 = 'Dodge<br/>';
    $mobil4 = 'Ford<br/>';
    $mobil5 = 'Toyota<br/>';
  }
  bruh();
  echo $mobil1; // Undefined
  echo $mobil2; // Able to called
  echo $mobil3; // Undefined
  echo $mobil4; // Undefined
  echo $mobil5; // Able to called
?>
<!-- Task 2 : Call everything "in or out" side the method -->
<?php
  $a = 7;
  function data(){
    global $a;
    global $b;
    global $c;
    $b = 7;
    $c = 6;
  }
  data();
  echo $a;
  echo $b;
  echo $c;
  echo "<br/>";
?>
<!-- Task 3 : Create a static variable and downgrade the numberz -->
<?php
  function loop(){
    static $number = 100;
    $number -= 10;
    return "The Number is = $number<br/>";
  }
  echo loop();
  echo loop();
  echo loop();
  echo loop();
  echo loop();
  echo loop();
  echo loop();
  echo loop();
  echo loop();
  echo loop();
?>