<?php
# Constants --------------------------------------------------------------
# Path Constants
define('BASE_URL', '');         #
define('DEFAULT_VIEW', 'home'); # set this to any page to be the default home page

# Social Constants
define('FACEBOOK_URL', 'https://www.facebook.com/hackingedusf');
define('TWITTER_URL', 'https://twitter.com/hackingedusf');
define('GOOGLE_PLUS_URL', 'https://google.com/hackingeduco');

# Date Constants
define('SUBMISSION_DATE', 'submission date/time TBD'); // ex: Sunday March 22nd, 2015 at 10:00 am
define('START_DATE', 'start date TBD'); // ex: Friday, April 11th, 2014

# Location Constants
define('HACK_EDU_LOCATION', 'SF Bay Area');
define('HACK_EDU_VENUE', 'venue TBD');


# IF DOCUMENT IS PUBLISHED: https://spreadsheets.google.com/feeds/list/1gQ5UrP3LSP6gTLlpJU_4Yg_5Bd6jyCAuZjSWOOZXoDg/1/public/values?alt=json
# REFERENCE: https://developers.google.com/gdata/samples/spreadsheet_sample

# SAME PROBLEM: https://github.com/asimlqt/php-google-spreadsheet-client/issues/20


# Api Info
# Local ------------------------------------------------------------------
// if ('localhost' == $_SERVER['HTTP_HOST']) {
	# Access Token
	define('ACCESS_TOKEN', 'AIzaSyCBlmcciDdZzskoijajAFFm60up8sLYE84');
	define('CLIENT_ID', '350501803272-befu93rktfabnsi99cco49vffe6tlb9f.apps.googleusercontent.com');
	define('CLIENT_EMAIL', '350501803272-befu93rktfabnsi99cco49vffe6tlb9f@developer.gserviceaccount.com');
	define('GOOGLE_CLIENTKEYPATH', './application/API Project-fcd379a2a28a.p12');

# Production (remote) ----------------------------------------------------
// } else {
// 	# Access Token
// }

