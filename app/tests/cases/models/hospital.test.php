<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Applications/MAMP/htdocs/jean/cake/console/templates/default/classes/test.ctp on line 22
/* Hospital Test cases generated on: 2011-07-03 17:35:10 : 1309682110*/
App::import('Model', 'Hospital');

class HospitalTestCase extends CakeTestCase {
	var $fixtures = array('app.hospital', 'app.user', 'app.users_hospital');

	function startTest() {
		$this->Hospital =& ClassRegistry::init('Hospital');
	}

	function endTest() {
		unset($this->Hospital);
		ClassRegistry::flush();
	}

}
