<?php defined('SYSPATH') or die('No direct script access.');

	class Kohana_Log_Mailer_File extends Log_File {

		public function write(array $messages)
		{
				// Set the yearly directory name
				$directory = $this->_directory.date('Y');
		 
				if ( ! is_dir($directory))
				{
						// Create the yearly directory
						mkdir($directory, 02777);
		 
						// Set permissions (must be manually set to fix umask issues)
						chmod($directory, 02777);
				}
		 
				// Add the month to the directory
				$directory .= DIRECTORY_SEPARATOR.date('m');
		 
				if ( ! is_dir($directory))
				{
						// Create the yearly directory
						mkdir($directory, 02777);
		 
						// Set permissions (must be manually set to fix umask issues)
						chmod($directory, 02777);
				}
		 
				// Set the name of the log file
				$filename = $directory.DIRECTORY_SEPARATOR.date('d').EXT;
		 
				if ( ! file_exists($filename))
				{
						// Create the log file
						file_put_contents($filename, Kohana::FILE_SECURITY.' ?>'.PHP_EOL);
		 
						// Allow anyone to write to log files
						chmod($filename, 0666);
				}
		 
				foreach ($messages as $message)
				{
						// Write each message into the log file
						file_put_contents(
							$filename, 
							PHP_EOL . 
							"/**************************************************/" .
							PHP_EOL .
							$message['body'],
							FILE_APPEND
						);
				}
		}

	}

