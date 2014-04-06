<?php
// Namespace
namespace Command;

/**
 * The bot disconnects for the specified number of seconds
 * arguments[0] == Number of seconds to disconnect.
 *
 * @package IRCBot
 * @subpackage Command
 * @author Super3 <admin@wildphp.com>
 */
class Total extends \Library\IRC\Command\Base {
    /**
     * The command's help text.
     *
     * @var string
     */
    protected $help = '!total <amount>';

    /**
     * The number of arguments the command needs.
     *
     * You have to define this in the command.
     *
     * @var integer
     */
    protected $numberOfArguments = 1;

    /**
     * The bot disconnects for the specified number of seconds.
     */
    public function command() {
	$amount = $this->arguments[0];
	$this->bot->log("Getting price.");
	$data = $this->fetchtotal("http://data.bter.com/api/1/ticker/doge_btc");
	
    }
}
?>