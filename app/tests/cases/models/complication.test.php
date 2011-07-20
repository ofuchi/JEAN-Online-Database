<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Applications/MAMP/htdocs/jean/cake/console/templates/default/classes/test.ctp on line 22
/* Complication Test cases generated on: 2011-07-03 17:07:06 : 1309680426*/
App::import('Model', 'Complication');

class ComplicationTestCase extends CakeTestCase {
	var $fixtures = array('app.complication', 'app.sheet', 'app.sheets_complication');

	function startTest() {
		$this->Complication =& ClassRegistry::init('Complication');
	}

	function endTest() {
		unset($this->Complication);
		ClassRegistry::flush();
	}

}
