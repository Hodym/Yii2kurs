<?php
/* @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode('|=|', $emails);

echo '<hr>';

// Array helpers with HTML list

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Rome',
    '5' => 'Kyiv',
];

$listData = ArrayHelper::map($employees, 'id', 'email');

echo Html::dropDownList('emails', [], $listData);