# Kohana 3 Log for Mailer

This is a logging plugin for Kohana 3's [Mailer module](https://github.com/themusicman/Mailer).

Currently Mailer is not patched to use dynamic transports, so you will need to use [my fork](https://github.com/jmhobbs/Mailer).

## Usage

In your <tt>config/mailer.php</tt> use the <tt>log</tt> transport:


    return array (
      'default' => array (
        'transport'	=> 'log',
        'options'	=> array (
          'path'	=> APPPATH . 'logs/mailer/',
        ),
      )
    );

Now just use Mailer like normal, your raw messages should be logged (be careful with attachements!)

