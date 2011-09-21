<?php defined('SYSPATH') or die('No direct script access.');

	return array
	(
		'default' => array(
			'transport'	=> 'log',
			'options'	=> array
							(
								'path' => APPPATH . 'logs/mailer/',
							),
		)
	);

