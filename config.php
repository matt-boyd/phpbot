<?php
return array(
    'server'   => 'irc.freenode.org',
    'port'     => 6667,
    'name'     => 'matthew_boyd',
    'nick'     => 'matthew_boyd',
    'channels' => array(
        '#matthew_boyd',
    ),
    'max_reconnects' => 1,
    'log_file'       => 'log.txt',
    'commands'       => array(
        'Command\Say'     => array(),
        'Command\Poke'    => array(),
		'Command\Joke'    => array(),
        'Command\Join'    => array(),
        'Command\Part'    => array(),
        'Command\Timeout' => array(),
        'Command\Quit'    => array(),
		'Command\DogeD'   => array(),
		'Command\Doge'    => array(),
        'Command\Restart' => array(),
		'Command\Total'   => array(),
		'Command\Btc'     => array(),
    ),
    'listeners' => array(
        'Listener\Joins' => array(),
    ),
);
