<?php

namespace frontend\controllers;

/**
 * @author hodym
 */
class HtmlHelperController extends \yii\web\Controller {

    public function actionDemo() 
    {
        return $this->render('demo');
    }

    public function actionEscapeOutput() 
    {
        $comments = [
                [
                'id' => 10,
                'author' => 'Dima',
                'text' => 'Hello!'
            ],
                [
                'id' => 11,
                'author' => 'Victor',
                'text' => 'Hello! How are you?'
            ],
                [
                'id' => 12,
                'author' => 'Solo',
                'text' => '<b>Hello!</b><script>alert("I will steal your money");</script>',
            ],
            
        ];
        
        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }

}
