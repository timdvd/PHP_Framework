<?php

namespace app\controllers;

use app\models\AppModel;
use project\base\Controller;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }

}