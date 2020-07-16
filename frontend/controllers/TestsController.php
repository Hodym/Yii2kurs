<?php

namespace frontend\controllers;

use Yii;
use Faker\Factory;
use yii\web\Controller;

/**
 * Description of TestsController
 * @author hodym
 */
class TestsController extends Controller
{
    public function actionGenerate()
    {
        /* @var $faker Faker\Generator */
        $faker = Factory::create();
        
        for ($j = 0; $j < 10; $j++) {
            
            $news = [];
            for ($i = 0; $i < 100; $i++) {
                $news[] = [$faker->text(35), $faker->text(rand(1000, 2000)), rand(0, 1)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
            
        }
        
        die('stop');
        
    }
    
}
