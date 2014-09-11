// <?php
// /**
//  * The Router is just a place that, so to speak, gets things going.  It just routes various things to
//  * different places.
//  *
//  * Right now it's just determining where to load files from AND instantiating the new Controller.
//  */

// // Starting Session
// // session_start();

// /**
//  * Description:
//  * Loads all the required files according to each class/file that is being used.
//  *
//  * @param  [type] $class [description]
//  * @return [type]        [description]
//  */
// function autoloader($class)
// {
// 	if (file_exists('application/' . strtolower($class) . '.php')) {

// 		// first check the application directory
// 		include_once('application/' . strtolower($class) . '.php');
// 	}
// 	elseif (file_exists('application/controllers/' . strtolower($class) . '.php')) {

// 		// then check the controller directory
// 		include_once('application/controllers/' . strtolower($class) . '.php');
// 	}
// 	elseif (file_exists('application/models/' . strtolower($class) . '.php')) {

// 		// finally check the models directory
// 		include_once( 'application/models/' . strtolower($class) . '.php');
// 	}
// }

// require_once('application/config.php');
// spl_autoload_register('autoloader');

// // grab the path info and break it apart into separate variables
// $paths= explode('/', $_SERVER['PATH_INFO']);

// //check the view, if empty set to default view
// if ($paths[1] == '') {

// 	$view = DEFAULT_VIEW;

// } else {

// 	$view = $paths[1];
// }

// //check to see if a method is being called and assign the $method variable
// $method = $paths[2];

// //check to see if any parameters are passed and assign the $parameters array
// for ( $i=3; $i < count($paths); $i++) {

// 	$parameters[] = $paths[$i];
// }

// //uppercase the first variable name and append Controller to it. If none, the default controller will load
// $controller = ucfirst($view) . 'Controller';

// //instantiate our controller and pass in parameters
// if (class_exists($controller)) {

//     new $controller($view, $method, $parameters);

// } else {

// 	new Controller('404');
// }