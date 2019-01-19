<?php

namespace AbuseIO\Parsers;

use AbuseIO\Models\Incident;

use Illuminate\Support\Facades\Log;


/**
 * Class Bitninja
 * @package AbuseIO\Parsers
 */
class Bitninja extends Parser
{
    /**
     * Create a new Bitninja instance
     *
     * @param \PhpMimeMailParser\Parser $parsedMail phpMimeParser object
     * @param array $arfMail array with ARF detected results
     */
    public function __construct($parsedMail, $arfMail)
    {
        // Call the parent constructor to initialize some basics
        parent::__construct($parsedMail, $arfMail, $this);
    }

    /**
     * Parse attachments
     * @return array    Returns array with failed or success data
     *                  (See parser-common/src/Parser.php) for more info.
     */
    public function parse()
    {
		
		$reports = [ ];

		$subject = $this->parsedMail->getHeader('subject');
		$body = $body = $this->parsedMail->getMessageBody();;

	
        	// Grab the message part from the body
        	preg_match(
            	'/Your server (?<ip>.*) has been registered as an attack source/',
            	$subject,
            	$matches
        	);
		$this->feedName = "login-attack";

		$ip = $matches['ip'];


		$incident = new Incident();
		$incident->source      = config("{$this->configBase}.parser.name");
		$incident->source_id   = false;
		$incident->ip          = $matches['ip'];
		$incident->domain      = false;
		$incident->class       = config("{$this->configBase}.feeds.{$this->feedName}.class");
		$incident->type        = config("{$this->configBase}.feeds.{$this->feedName}.type");
		$incident->timestamp   = strtotime("now");
		#$incident->timestamp   = strtotime($report['Date']);
		$incident->information = json_encode($body);

		$this->incidents[] = $incident;
		


	return $this->success();

    }
}
