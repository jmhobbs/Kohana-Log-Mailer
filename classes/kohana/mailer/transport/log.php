<?php defined('SYSPATH') or die('No direct script access.');

	class Kohana_Mailer_Transport_Log extends Kohana_Mailer_Transport {

		public function build ( $config ) {
			$log = new Log_Mailer_File( $config['path'] );
			return Swift_KohanaLogTransport::newInstance( $log );
		}

	}

