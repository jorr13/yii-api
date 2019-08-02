<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class DefaultController extends ActiveController
{
    /**
     * Renders the index view for the module
     * @return string
     */
   
        public $modelClass='app\models\Noticias';
    
}
