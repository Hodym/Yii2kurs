<?php

namespace frontend\models;

use Yii;

/**
 * @author hodym
 */
class NewsSearch 
{
    public function simpleSearch($keyword)
    {
        // TODO: fix security issue (hometask)
        $sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
