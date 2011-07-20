<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Asia/Tokyo' for 'JST/9.0/no DST' instead in /Applications/MAMP/htdocs/jean/cake/console/templates/default/classes/test.ctp on line 22
/* Method Test cases generated on: 2011-07-03 17:36:05 : 1309682165*/
App::import('Model', 'Method');

class MethodTestCase extends CakeTestCase {
	var $fixtures = array('app.method', 'app.trial');

	function startTest() {
		$this->Method =& ClassRegistry::init('Method');
	}

	function endTest() {
		unset($this->Method);
		ClassRegistry::flush();
	}

}
