<?php

namespace app\controllers;

use app\components\TestService;
use app\models\Product;
use app\models\Task;
use app\models\User;
use yii\db\Query;
use yii\helpers\VarDumper;
use yii\web\Controller;


class TestController extends Controller
{


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
//        $task = Task::findOne(19);
//        $task->description = 'sdasd22221111';
//        $task->save();
//
//    _end($task);



         return $this->render('index');
    }

}
