<?php
/* Methods Test cases generated on: 2011-07-08 20:28:24 : 1310124504*/
App::import('Controller', 'Methods');

class TestMethodsController extends MethodsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MethodsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.method', 'app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant');

	function startTest() {
		$this->Methods =& new TestMethodsController();
		$this->Methods->constructClasses();
	}

	function endTest() {
		unset($this->Methods);
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
