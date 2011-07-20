<?php
/* Users Test cases generated on: 2011-07-08 20:31:19 : 1310124679*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.sheet', 'app.adaptation', 'app.trial', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant', 'app.complication', 'app.sheets_complication', 'app.hospital', 'app.users_hospital');

	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
