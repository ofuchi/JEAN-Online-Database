<?php
/* Trial Test cases generated on: 2011-07-09 02:05:40 : 1310144740*/
App::import('Model', 'Trial');

class TrialTestCase extends CakeTestCase {
	var $fixtures = array('app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant');

	function startTest() {
		$this->Trial =& ClassRegistry::init('Trial');
	}

	function endTest() {
		unset($this->Trial);
		ClassRegistry::flush();
	}

}
