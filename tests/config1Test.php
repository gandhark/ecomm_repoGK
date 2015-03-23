<?php

require("ecomm_project/config1.php");
class ConfigTest extends PHPUnit_Framework_TestCase
	{
		public function testHostconfiguration()
		{
			$this->assertEquals('172.27.59.54', Config::HOST);
		}
		public function testUserconfiguration()
		{
			$this->assertEquals('ecomm', Config::USER);
		}
		public function testPasswordconfiguration()
		{
			$this->assertEquals('ecomm@123', Config::PASSWORD);
		}
		public function testHelperconfiguration()
		{
			$this->assertEquals('Helper.php', Config::HELPER);
		}
	}
		
?>
