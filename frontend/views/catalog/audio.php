<?php

use yii\helpers\Url;

$query = 'SELECT name FROM category WHERE id = ' . $item['category_id'];
$categoryName = Yii::$app->db->createCommand($query)->queryOne();
?>
<a href="<?php echo Url::to(['catalog/' . $item['category_id'] . '/']); ?>">Back</a>
<a href="<?php echo Url::to(['catalog/']); ?>">Home</a>
<h1><?php echo $item['name']; ?></h1>
<h2><i><?php echo 'Category: ' . $categoryName['name']; ?><i></h2>
<img src="<?php echo $item['img_path'] ?>" width="500" alt="<?php echo $item['name'] ?>">
<?php echo $item['audio_path'] ?>
<audio src="<?php echo $item['audio_path'] ?>" controls="controls"></audio>
<p><?php echo $item['date'] ?></p>
<hr>