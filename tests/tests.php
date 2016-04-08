<?php
require_once('../db.php');

class csSQLTest extends PHPUnit_Framework_TestCase
{
    public function setUp() { }
    public function tearDown() { }

    public function testConnect()
    {
        // insert valid host details
        $db_host = 'localhost';
        $db_name = 'test123';
        $db_user = 'test123';
        $db_pass = 'test123';

        // init the class same as PDO
        $dbTest = new ( "mysql:host``=$db_host;dbname=$db_name", $db_user, $db_pass );
        $this->assertTrue($dbTest->debug(); !== false);

    }
}

?>