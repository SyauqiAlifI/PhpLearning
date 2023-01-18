<?php
  class laptop {
    var $brand;
    var $model;
    var $color;
    var $rom;
    var $ram;
    function device_name(){
      return 'ASUS VivoBook A1502';
    }
    function display_res(){
      return '15,6 inch';
    }
  }
  echo '<hr/>';
  // A Type
  $a_type = new laptop();
  $a_type->brand='Acer';
  $a_type->model='Nitro 5';
  $a_type->color='Pitch Black';
  $a_type->rom='512GB';
  $a_type->ram='16GB';
  echo $a_type->brand;
  echo '<br/>';
  echo $a_type->model;
  echo '<br/>';
  echo $a_type->color;
  echo '<br/>';
  echo $a_type->rom;
  echo '<br/>'; 
  echo $a_type->ram;
  echo '<hr/>';
  // B Type
  $b_type = new laptop();
  $b_type->brand='Lenovo';
  $b_type->model='Ideapad 3';
  $b_type->color='Sea Blue';
  $b_type->rom='256GB';
  $b_type->ram='8GB';
  echo $b_type->brand;
  echo '<br/>';
  echo $b_type->model;
  echo '<br/>';
  echo $b_type->color;
  echo '<br/>';
  echo $b_type->rom;
  echo '<br/>'; 
  echo $b_type->ram;
  echo '<hr/>';
  // My Laptop
  $my_laptop = new laptop();
  $my_laptop->brand='ASUS';
  $my_laptop->model='VivoBook V15';
  $my_laptop->color='Navy Blue';
  $my_laptop->rom='512GB';
  $my_laptop->ram='12GB';
  echo $my_laptop->brand;
  echo '<br/>';
  echo $my_laptop->model;
  echo '<br/>';
  echo $my_laptop->color;
  echo '<br/>';
  echo $my_laptop->rom;
  echo '<br/>'; 
  echo $my_laptop->ram;
  echo '<hr/>';
?>