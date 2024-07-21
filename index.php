<?php
require_once 'vendor/autoload.php';

use App\Model;
use App\View;

Model::Init();
$properties = Model::getProperties();
View::Begin();
View::Show($properties);
View::End();










