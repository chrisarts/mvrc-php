<?php
namespace App\Routes;


error_reporting(E_ALL);

use App\Controllers\HomeController\HomeController;
use App\Core\Route\Route;

//Create new Route Handler
$route = new Route();

//App Routes, if you want to create a new route please use relative paths (like /route/to/create)

$route::get('/', function(){
    echo HomeController::CreateView('Index');
}, array('requireAuth' => false));



$route::render();