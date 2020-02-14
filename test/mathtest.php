<?php
require_once './src/math.php';
class UserTest extends PHPUnit\Framework\TestCase {
public function setUp() :void {}
public function tearDown() :void {}

public function testUserName(){
// test pour s’assurer que l’objet à un nom valide
$userName = "blognt";
$user = new User($userName);
$this->assertTrue($user->getUserName() !== false);
}
}
?>

