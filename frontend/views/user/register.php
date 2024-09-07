<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>
<h2>Registration</h2>
<?php
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);

$required = '<span style="color: red">*</span>';
echo $form->field($model, 'ImgFile')->fileInput(['class' => 'form-control'])->label('Image ' . $required);
echo $form->field($model, 'UserName')->label('Username ' . $required);
echo $form->field($model, 'FirstName')->label('First name ' . $required);
echo $form->field($model, 'LastName')->label('Last name');
echo $form->field($model, 'Password')->passwordInput()->label('Password ' . $required);
echo $form->field($model, 'Email');
echo Html::submitButton('Confirm', ['class' => 'btn btn-primary w-25 mt-2']);

ActiveForm::end();
?>