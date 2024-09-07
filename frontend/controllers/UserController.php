<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;
use yii\web\UploadedFile;

class UserController extends Controller
{
    public function actionRegister()
    {
        $model = new User();
        $model->scenario = USER::SCENARIO_USER_REGISTER;

        if ($model->load(Yii::$app->request->post())) {
            $model->ImgFile = UploadedFile::getInstance($model, 'ImgFile');
            if ($model->validate() && $model->register()) {
                Yii::$app->session->setFlash('success', 'Registered!');

                return $this->redirect(['catalog/categories']);
            }
        }

        return $this->render('register', ['model' => $model]);
    }
    public function actionLogin()
    {
        $model = new User();
        $model->scenario = USER::SCENARIO_USER_LOGIN;

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->login()) {
                Yii::$app->session->setFlash('success', 'Logined!');

                return $this->redirect(['catalog/categories']);
            }
        }

        return $this->render('login', ['model' => $model]);
    }
    /* public function actionUpdate()
    {
        $model = new User();
        $model->scenario = User::SCENARIO_USER_UPDATE;
        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            if ($model->validate() && $model->update()) {
                Yii::$app->session->setFlash('success', 'User updated!');

                return $this->redirect(['catalog/categories']);
            }
        }

        return $this->render('update', ['model' => $model]);
    } */
}
