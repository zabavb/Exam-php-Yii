<?php

namespace frontend\models;

use yii\base\Model;
use yii\base\ErrorException;
use Yii;

class Audio extends Model
{
    public $Name;
    public $ImgFile;
    public $ImgPath;
    public $AudPath;
    public $Report;
    public $Date;
    public $CategoryID;

    /* public function rules()
    {
        return [
            [['ImgFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['Name', 'Date'], 'required'],
            [['Name'], 'string', 'min' => 2, 'max' => 32],
            [['Date'], 'date', 'format' => 'php:Y-m-d'],
        ];
    } */

    public static function getAudiosByCategoryID($id)
    {
        $sql = "SELECT * FROM sound WHERE category_id = $id";

        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    public  function getAudiosByName()
    {
        $sql = "SELECT * FROM sound WHERE name = '$this->Name'";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    public static function getAudio($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM sound WHERE id = $id";

        return Yii::$app->db->createCommand($sql)->queryOne();
    }
    public function add()
    {
        $this->ImgPath = Yii::getAlias('@app') . '/Files/Images/SoundImages' . $this->ImgFile->baseName . '.' . $this->ImgFile->extension;
        $this->ImgFile->saveAs($this->ImgPath);

        if (file_exists($this->ImgPath)) {
            $query1 = "INSERT INTO category (name, img_path, date) VALUES 
            ('$this->Name', '$this->ImgPath', '$this->Date')";

            try {
                Yii::$app->db->createCommand($query1)->execute();
            } catch (ErrorException $e) {
                Yii::$app->session->setFlash('danger', 'Error: ' . $e);

                return false;
            }

            return true;
        } else {
            Yii::$app->session->setFlash('danger', 'Error occured in saving process!');
            return false;
        }
    }
    public function remove($name)
    {
        $query = "DELETE FROM category WHERE name = '$name'";

        try {
            Yii::$app->db->createCommand($query)->execute();
        } catch (ErrorException $e) {
            Yii::$app->session->setFlash('danger', 'Error: ' . $e);
        }
    }
}
