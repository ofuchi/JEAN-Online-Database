<?php
/* Sheet Test cases generated on: 2011-07-07 03:29:15 : 1309976955*/
App::import('Model', 'Sheet');

class SheetTestCase extends CakeTestCase {
	var $fixtures = array('app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.trial', 'app.complication', 'app.sheets_complication');

	function startTest() {
		$this->Sheet =& ClassRegistry::init('Sheet');
	}

	function endTest() {
		unset($this->Sheet);
		ClassRegistry::flush();
	}

}
