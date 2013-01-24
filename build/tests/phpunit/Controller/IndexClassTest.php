<?php


class RPSNewControllerGameClassTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once(dirname(__FILE__)."/../bootstrap.php");
    }

    public function testExecuteReturnsAValue() {
        $control = new \Controller\Index(new mockGameDrupalHelper());
        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "home";
        $returnRay = $control->execute($mockPageVars);
        $this->assertTrue( !is_null($returnRay) );
    }

    public function testExecuteReturnsAnArray() {
        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "home";
        $control = new \Controller\Index(new mockGameDrupalHelper());
        $returnRay = $control->execute($mockPageVars);
        $this->assertTrue( is_array($returnRay) );
    }

    public function testExecuteReturnsAnArrayWithIndexViewWhenActionIsHome() {
        $mockPageVars = array();
        $mockPageVars["route"] = array();
        $mockPageVars["route"]["action"] = "home";
        $control = new \Controller\Index(new mockGameDrupalHelper());
        $returnRay = $control->execute($mockPageVars);
        $this->assertTrue( array_key_exists("type", $returnRay) );
        $this->assertTrue( $returnRay["type"]=="view" );
        $this->assertTrue( array_key_exists("view", $returnRay) );
        $this->assertTrue( $returnRay["view"]=="Index" );
    }

}



class mockGameDrupalHelper {

    public function getFunc($function, $params = array() ) {
        return true;
    }

}
