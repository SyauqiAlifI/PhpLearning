<?php
  // Create a method with a parameter
  class plane {
    public function fly($name, $owner){
      return "There's a plane named \"$name\",<br/>owned by someone called \"$owner\"";
    }
  }
  $plane1 = new plane();
  echo $plane1->fly('Stellosphere', 'Alif');
?>