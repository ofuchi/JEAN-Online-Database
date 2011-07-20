<?php
/* Sheets Test cases generated on: 2011-07-07 03:30:37 : 1309977037*/
App::import('Controller', 'Sheets');

class TestSheetsController extends SheetsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SheetsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.trial', 'app.complication', 'app.sheets_complication');

	function startTest() {
		$this->Sheets =& new TestSheetsController();
		$this->Sheets->constructClasses();
	}

	function endTest() {
		unset($this->Sheets);
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
