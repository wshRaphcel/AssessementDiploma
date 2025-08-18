<?php 
namespace Rp\vscode\AssessementDiploma;
// declare othr components used in this class
use Dotenv;
use \Exception;

class App {
    //visibility
    public function __construct() {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    }
}
?>