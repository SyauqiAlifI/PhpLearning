<!-- Looping has 4 methods -->
<?php
  // For loops
  for ($i = 0; $i<=10; $i++){
    echo "$i<br/>";
  }
  echo "<hr/>";
  // While loops
  $start = 0;
  while ($start<=10){
    echo $start++ ,"<br/>";
  }
  echo "<hr/>";
  // Do While loops
  $first = 10;
  do {
    echo $first--, "<br/>";
  } while ($first>=0);
  echo "<hr/>";
  // For each loops
  $fruits = ['Mango','Melon','Apple','Orange'];
  foreach ($fruits as $fruit) {
    echo $fruit, "<br/>";
  }
?>