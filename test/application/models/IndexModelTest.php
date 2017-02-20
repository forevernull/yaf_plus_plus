<?php
class IndexModelTest extends PHPUnit_Framework_TestCase {
    public function testGetIndex(){
        $mIndex = new IndexModel();
        $this->assertEquals("OK", $mIndex->getIndex());
    }
}
