<?php

namespace console\controllers;

use Yii;
/**
 * @author hodym
 */
class MailerController extends \yii\console\Controller 
{
    public function actionSend()
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
} //* * * * * php c:\OSPanel\domains\yii2.loc\yii mailer/send
