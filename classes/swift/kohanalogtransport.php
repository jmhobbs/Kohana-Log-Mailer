<?php defined('SYSPATH') or die('No direct script access.');

class Swift_KohanaLogTransport implements Swift_Transport {

	protected $log = null;

	public function __construct ( &$log ) {
		$this->log = $log;
	}
	
	public static function newInstance ( &$log ) {
		return new Swift_KohanaLogTransport( $log );
	}
	
  public function isStarted () { return false; }
	public function start () {}
	public function stop () {}

	public function send(Swift_Mime_Message $message, &$failed_recipients = NULL) {
		$this->log->write( array(
			array(
				'body'  => $message->toString(),
			),
		) );
		return 1;
	}
  
	public function registerPlugin( Swift_Events_EventListener $plugin ) {}

}


