<?php
/* Trial Fixture generated on: 2011-07-09 02:05:35 : 1310144735 */
class TrialFixture extends CakeTestFixture {
	var $name = 'Trial';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sheet_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'trialnumber' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'method_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'other_method' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'device_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'other_device' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'premed_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'other_premed' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'premeddose' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '5,1'),
		'sedative_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'other_sedative' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sedativedose' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '5,1'),
		'relaxant_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'other_relaxant' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'relaxantdose' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '5,1'),
		'trialer_pgy' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'erphysician' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'changed' => array('type' => 'string', 'null' => false, 'default' => 'no', 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'sheet_id' => 1,
			'trialnumber' => 1,
			'method_id' => 1,
			'other_method' => 'Lorem ipsum dolor sit amet',
			'device_id' => 1,
			'other_device' => 'Lorem ipsum dolor sit amet',
			'premed_id' => 1,
			'other_premed' => 'Lorem ipsum dolor sit amet',
			'premeddose' => 1,
			'sedative_id' => 1,
			'other_sedative' => 'Lorem ipsum dolor sit amet',
			'sedativedose' => 1,
			'relaxant_id' => 1,
			'other_relaxant' => 'Lorem ipsum dolor sit amet',
			'relaxantdose' => 1,
			'trialer_pgy' => 1,
			'erphysician' => 'Lorem ip',
			'changed' => 'Lorem ip',
			'comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-07-09 02:05:35',
			'modified' => '2011-07-09 02:05:35'
		),
	);
}
