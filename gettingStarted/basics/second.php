<?php
class baru {
  // Public Method
  public function detail(){
    return 'L O L';
  }
}
$new = new baru();
echo $new->detail();
$inherit = $new->detail();
echo ' ';
echo $inherit;
echo '<br/>';

class wassup {
  // Protected
  protected $sup = 'What\'s UP?';
  protected function say_it(){
    return 'F*CkeRssssss';
  }
  // Make it public
  public function said_it(){
    return "{$this->sup} {$this->say_it()}";
  }
}
$protectedobj = new wassup();
echo $protectedobj->said_it();
?>