<?php
class User {
var $name = null;
public function __construct($name = null) {
$this->name = $name;
}
public function getUserName() {
if ($this->name == null){
throw new Exception("Veuillez préciser un nom !");
}

return $this->name;
}

public function returnSampleObject() {
return $this;
}
}
?>