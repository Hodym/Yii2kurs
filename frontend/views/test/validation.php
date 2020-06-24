<?php
/* @var $model frontend\models\exemple\ExampleValidation */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>
<h1>Test</h1>

<form method="post">
    <p>Test attribute:</p>
    <input name="testAttribute" type="text" />
    <br><br>
    
    <input type="submit" />
    
</form>