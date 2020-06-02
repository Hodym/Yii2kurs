<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
/**
 * Description of TestController
 *
 * @author hodym
 */
class TestController extends Controller 
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];
        
        $list = Test::getNewsList($max);
        
        return $this->render('index', [
            'list' => $list,
        ]);
    }
    
    public function actionView($id) 
    {
        $item = Test::getItem($id);
        
        return $this->render('view', [
            'item' => $item
        ]);
    }

    public function actionMail() 
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('testphp022@gmail.com')
            ->setTo('testphp022@gmail.com')
            ->setSubject('LOL jol')
            ->setTextBody('Hellow my frind!')
            ->setHtmlBody('<b>Hellow my frind!</b>')
            ->send();
        
            var_dump($result);
            die;
    }
    
}
