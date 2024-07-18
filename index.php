<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once 'vendor/autoload.php';

use App\Model;
use App\View;

Model::Init();
$properties = Model::getProperties();
//var_dump($properties);
View::Begin();
View::Show($properties);
View::End();










