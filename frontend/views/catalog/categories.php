<h1>Catalog</h1>
<hr>
<h2>Categories</h2>
<?php
foreach ($list as $item) : ?>
    <h1><a href="<?php echo Yii::$app->urlManager->createUrl(['catalog/audios', 'id' => $item['id']]); ?>"><?php echo $item['name']; ?></a></h1>
    <?php
    /* $tmp = substr(Yii::getAlias('@app'), 0, -9);
    $tmp = str_replace('\\', '/', $tmp);
    $item['img_path'] = $tmp . $item['img_path'];
    echo $item['img_path']; */
    ?>
    <img src="<?php echo $item['img_path'] ?>" width="500" alt="<?php echo $item['name'] ?>">
    <p><?php echo $item['date']; ?></p>
    <hr>

<?php endforeach; ?>

