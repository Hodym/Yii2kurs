<?php

namespace frontend\models\exemple;

/**
 * @author hodym
 */
class ExampleValidation extends \yii\base\Model 
{
    public $testAttribute;
    
    public function rules() 
    {
        return [
            [['testAttribute'], 'required'],
        ];
    }
}
