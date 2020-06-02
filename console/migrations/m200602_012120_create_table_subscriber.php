<?php

use yii\db\Migration;

/**
 * Class m200602_012120_create_table_subscriber
 */
//php yii migrate/up 1
class m200602_012120_create_table_subscriber extends Migration
{
   
    public function up()
    {
        $sql = 'CREATE TABLE `yii2advanced`.`subscriber` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;';
        Yii::$app->db->createCommand($sql)->execute();
    }

    public function down()
    {
        $sql = 'DROP TABLE `yii2advanced`.`subscriber`;';
        Yii::$app->db->createCommand($sql)->execute();
    }
    
}//php yii migrate/down
