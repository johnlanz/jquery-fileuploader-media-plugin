<?php
class Gallery extends AppModel {

	var $name = 'Gallery';
	
	//media plugin behaviors
	var $actsAs = array(
		'Media.Transfer',
		'Media.Coupler',
		'Media.Generator'
	);
	
	//file validation which only allowed jpeg and png to be uploaded
	var $validate = array(
		'file' => array(
			'mimeType' => array(
				'rule' => array('checkMimeType', false, array( 'image/jpeg', 'image/png'))
			)
		)
	);

}
?>