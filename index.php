<?php
require('vendor/autoload.php');

use Vscode\AssessementDiploma\App;

// create an app object based on App class 
$app = new App();
// print out the environment variables
// print_r($_ENV);
$title = "Home Page";
$message = "Hello there";

// create a template loader
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment( $loader );
// load the template into memore
$template = $twig -> load('index.html.twig');
// add some variables for twig to render
echo $template -> render([
    'title' => $title,
    'message' => $message
]);
?>
