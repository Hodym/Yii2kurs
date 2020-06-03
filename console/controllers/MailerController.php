<?php

namespace console\controllers;

use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
/**
 * @author hodym
 */
class MailerController extends \yii\console\Controller 
{
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();
        
        Sender::run($subscribers, $newsList);
        
    }
} //* * * * * php c:\OSPanel\domains\yii2.loc\yii mailer/send
