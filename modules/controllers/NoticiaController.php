<?php

namespace app\modules\controllers;

use yii\rest\ActiveController;

class NoticiaController extends ActiveController
{
    public $modelClass = 'app\models\Noticia';

    public function actions()
    {
        $actions = parent::actions();
        // unset($actions['delete'], $actions['create']);
        return $actions;
    }
}
