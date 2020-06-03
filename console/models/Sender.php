<?php

namespace console\models;

use Yii;
/**
 * @author hodym
 */
class Sender 
{
    public static function run($subscribers, $newsList) 
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                ->setFrom('testphp022@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Hay)')
                ->send();
        var_dump($result);
        }
    }
}
