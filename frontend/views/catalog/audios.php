<?php
$query = 'SELECT name FROM category WHERE id = ' . $id;
$categoryName = Yii::$app->db->createCommand($query)->queryOne();
?>
<h1>Category: <?php echo $categoryName['name']; ?></h1>
<hr>
<h2>Audios</h2>
<?php

use yii\helpers\Url;

?>
<a href="<?php echo Url::to(['catalog/']); ?>">Back</a>
<?php foreach ($list as $item) : ?>
    <h1><a href="<?php echo Yii::$app->urlManager->createUrl(["catalog/audio", "id" => $item["id"]]); ?>"><?php echo $item['name']; ?></a></h1>
    <img src="<?php echo $item['img_path'] ?>" width="500" alt="<?php echo $item['name'] ?>">
    <?php echo $item['audio_path'] ?>
    <audio src="<?php echo $item['audio_path'] ?>" controls="controls"></audio>
    <p><?php echo $item['date'] ?></p>
    <hr>
<?php endforeach; ?>