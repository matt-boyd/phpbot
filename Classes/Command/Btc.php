<?php
// Namespace
namespace Command;

/**
 * Sends the joke to the channel.
 * arguments[0] == Channel or User to say message to.
 *
 * @package IRCBot
 * @subpackage Command
 * @author Matej Velikonja <matej@velikonja.si>
 */
class Btc extends \Library\IRC\Command\Base {
    /**
     * The command's help text.
     *
     * @var string
     */
    protected $help = '!price';

    /**
     * The number of arguments the command needs.
     *
     * @var integer
     */
    protected $numberOfArguments = 0;

    /**
     * Sends the arguments to the channel. A random joke.
     *
     * IRC-Syntax: PRIVMSG [#channel]or[user] : [message]
     */
    public function command() {


        $this->bot->log("Getting price.");

        $data = $this->fetchbtc("https://api.vircurex.com/api/get_last_trade.json?base=BTC&alt=USD");

    }
}
