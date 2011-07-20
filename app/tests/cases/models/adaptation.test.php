<?php
/* Adaptation Test cases generated on: 2011-07-09 01:01:35 : 1310140895*/
App::import('Model', 'Adaptation');

class AdaptationTestCase extends CakeTestCase {
	var $fixtures = array('app.adaptation', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.trial', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant', 'app.complication', 'app.sheets_complication');

	function startTest() {
		$this->Adaptation =& ClassRegistry::init('Adaptation');
	}

	function endTest() {
		unset($this->Adaptation);
		ClassRegistry::flush();
	}

}
