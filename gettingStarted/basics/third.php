<?php
  // Example of using "this"
  class try_me {
    // We'll call this in a function
    public $name = 'Alif';
    // The "Function"
    public function try_us(){
      return "My name is $this->name";
    }
  }
  // Create an object to see the result
  $my_name = new try_me();
  $my_name->name = 'Syauqi';
  echo $my_name->try_us();
?>