<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Audio;

class SearchController extends Controller
{
    public function actionSearch()
    {
        $list = [];
        $model = new Audio();

        if ($model->load(Yii::$app->request->post()))
            $list = $model->getAudiosByName();

        return $this->render('search', ['model' => $model, 'list' => $list]);
    }
}
