<?php
# Constants
define('BASE_URL', '');         #
define('DEFAULT_VIEW', 'home'); # set this to any page to be the default home page
define('FACEBOOK_URL', 'https://www.facebook.com/hackingedusf');
define('TWITTER_URL', 'https://twitter.com/hackingedusf');
define('GOOGLE_PLUS_URL', 'https://plus.google.com/100755871712588838625');

# Database Info
# Local ------------------------------------------------------------------
if ('localhost' == $_SERVER['HTTP_HOST']) {
	define('DB_HOST', '127.0.0.1');                   # host name (ie: `localhost` or port #)
	define('DB_USER', 'root');                        # username
	define('DB_PASS', '');                            # password
	define('DB_NAME', 'name_of_database_here');       # database name
# Production (remote) ----------------------------------------------------
} else {
	define('DB_HOST', 'localhost');                   # usually `localhost`
	define('DB_USER', 'username_here');               # username
	define('DB_PASS', 'password_here');               # password
	define('DB_NAME', 'name_of_database_here');       # database name
}
