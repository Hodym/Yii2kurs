<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * @author hodym
 */
class AliasController extends Controller 
{
    public function actionExample() 
    {
        /*Yii::setAlias('@files', 'c:/ospanel/domains/yii2.loc/frontend/web/files');
        пример аліасів
        $result = mkdir(Yii::getAlias('@files').'/test4');
        var_dump($result);*/
        
        /*$result = mkdir(Yii::getAlias('@files').'/test6');
        var_dump($result);
         * 
         * аліас записуєм в main.php
         */
        
        echo Yii::getAlias('@photos');
    }
}
