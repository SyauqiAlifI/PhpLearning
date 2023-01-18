<!-- Format Tag Php -->
<?php
  // Create class / PHP Object
  class idn {
    // Class body
    // PHP variables / Property
    var $kelas;
    var $kantor;
    var $uks;
    // PHP functions / Method
    function say_hi(){
      return 'Hi!';
    }
    function say_hello(){
      return 'Hello!';
    }
  }
  // PHP Object
  $idnschool = new idn();
  // Set a Property inside an Object
  $idnschool->kelas='XI RPL B ';
  $idnschool->kantor='Kantor SMK ';
  $idnschool->uks='UKS SMK';
  // Shown variables result
  echo $idnschool->kelas;
  echo '<br/>';
  echo $idnschool->kantor;
  echo '<br/>';
  echo $idnschool->uks;
  echo '<br/>';
  // Call function / Method
  echo $idnschool->say_hi();
  echo '<br/>';
  echo $idnschool->say_hello();
?>