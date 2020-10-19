<?php
include_once "include/datas.inc.php";

class MyTest extends \Codeception\Test\Unit
{
    const DATA_LOCATION='datas/';

    protected function _before()
    {
        
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(1===1);
        $this->assertFalse(1===true);
        
    }
    
    // tests
    public function testEmployeeLoading()
    {
        $employees=jsonFileToArray(self::DATA_LOCATION.'employees.json');
        $this->assertIsArray($employees);
        $this->assertEquals(16, count($employees));
        $this->assertEquals('Robin Arryn', $employees[0]['name']);
    }
    
    // tests
    public function testSoftLoading(){
        $softs=jsonFileToArray(self::DATA_LOCATION.'softs.json');
        $this->assertIsArray($softs);
        $this->assertEquals(11, count($softs));
        $this->assertEquals('AG2L', $softs[0]['name']);
    }
}















