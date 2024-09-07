<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>
<h2>Search</h2>
<?php
$form = ActiveForm::begin();

echo $form->field($model, 'Name')->input(['class' => 'form-control w-50 mb-2', 'placeholder' => 'Audio name'])->label('');
echo Html::submitButton('Confirm', ['class' => 'btn btn-primary w-50 mt-2']);

ActiveForm::end();

foreach ($list as $item) : ?>
    <h1><a href="<?php echo Yii::$app->urlManager->createUrl(["catalog/audio", "id" => $item["id"]]); ?>"><?php echo $item['name']; ?></a></h1>
    <img src="<?php echo $item['img_path'] ?>" width="500" alt="<?php echo $item['name'] ?>">
    <?php echo $item['audio_path'] ?>
    <audio src="<?php echo $item['audio_path'] ?>" controls="controls"></audio>
    <p><?php echo $item['date'] ?></p>
    <hr>
<?php endforeach; ?>