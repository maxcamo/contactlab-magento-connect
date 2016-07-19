<?php

class Contactlab_Subscribers_Test_Model_Checks_FindDuplicatedCustomersCheck extends EcomDev_PHPUnit_Test_Case
{
    private $check;

    protected function setUp() {
        $this->check = Mage::getModel('contactlab_subscribers/checks_findDuplicatedCustomersCheck');
    }

    /**
     * @test
     */
    public function doCheck() {
        $this->assertEquals($this->check->check(), Contactlab_Subscribers_Model_Checks_CheckInterface::SUCCESS);
    }
}