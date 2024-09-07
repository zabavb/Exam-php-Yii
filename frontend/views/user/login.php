<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>
<h2>Login</h2>
<?php
$form = ActiveForm::begin();

echo $form->field($model, 'UserName')->label('Username');
echo $form->field($model, 'Password')->passwordInput()->label('Password');
echo Html::submitButton('Confirm', ['class' => 'btn btn-primary w-25 mt-2']);

ActiveForm::end();
?>