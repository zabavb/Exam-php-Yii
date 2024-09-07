<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Category;
use frontend\models\Audio;

class CatalogController extends Controller
{
    public function actionCategories()
    {
        $list = Category::getCategories();

        return $this->render('categories', ['list' => $list]);  
    }
    public function actionAudios($id)
    {
        $list = Audio::getAudiosByCategoryID($id);

        return $this->render('audios', ['list' => $list, 'id' => $id]);
    }
    public function actionAudio($id)
    {
        $item = Audio::getAudio($id);

        return $this->render('audio', ['item' => $item]);
    }
}
