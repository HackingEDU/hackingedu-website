<?php
// die(get_include_path());
$config = './application/config.php';
$google_api_php_client = 'libraries/google-api-php-client/src/Google/Client.php';
if (file_exists($config)) {
	require_once './application/config.php';
} else {
	echo "You're missing your config file! :(";
}
if (file_exists($google_api_php_client)) {
	set_include_path(get_include_path() . PATH_SEPARATOR . './libraries/google-api-php-client/src'); # To get Access Tokens to work
	include_once './libraries/google-api-php-client/src/Google/Client.php';
} else {
	echo "<h4>Our website is sick and has a cold :(</h4><br> Don't worry though! We've found the doctor and are working hard to nurse her back to health!<br><br>";

	set_include_path(get_include_path() . PATH_SEPARATOR . 'libraries/google-api-php-client/src'); # To get Access Tokens to work
	include_once $google_api_php_client;
}

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
			var_dump($this->client);
			die('after instantiating new Google_Client inside model');
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