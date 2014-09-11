<?php

require_once './application/config.php';
set_include_path(get_include_path() . PATH_SEPARATOR . '../../libraries/google-api-php-client/src'); # To get Access Tokens to work
include_once ".:/usr/local/lib/php:./libraries/google-api-php-client/src";
require_once '../../libraries/google-api-php-client/src/Google/Client.php';

class Model
{
	protected $client;
	protected $accessToken;

	public function __construct()
	{
		try {
			// Setting up Authentication and Access Token

			require_once './libraries/php-google-spreadsheet-client-master/src/Google/Spreadsheet/DefaultServiceRequest.php';
			$this->client = new Google_Client();
			$this->client->setApplicationName("HackingEDU");
			$this->client->setClientId(CLIENT_ID);

			$cred = new Google_Auth_AssertionCredentials(
			    CLIENT_EMAIL,
			    array('https://spreadsheets.google.com/feeds'),
			    file_get_contents(GOOGLE_CLIENTKEYPATH)
			);

			$this->client->setAssertionCredentials($cred);

			if($this->client->isAccessTokenExpired()) {
			    $this->client->getAuth()->refreshTokenWithAssertion($cred);
			}

			$obj_token = json_decode($this->client->getAccessToken());
			$this->accessToken = $obj_token->access_token;

		} catch (exception $e) {
			# Unable To Connect so Display the Error Message
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
}
