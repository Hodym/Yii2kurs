<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;
/**
 * Description of TestsController
 * @author hodym
 */
class TestsController extends Controller
{
    public function actionIndex()
    {
        $user = new User();
        
        echo 'test<br>';
    }
}
