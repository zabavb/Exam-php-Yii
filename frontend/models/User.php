<?php

namespace frontend\models;

use yii\base\Model;
use yii\base\ErrorException;
use Yii;

class User extends Model
{
    const SCENARIO_USER_REGISTER = 'user_register';
    const SCENARIO_USER_LOGIN = 'user_login';

    public $ImgFile;
    public $ImgPath;
    public $UserName;
    public $FirstName;
    public $LastName;
    public $Password;
    public $Email;
    public $RoleID;

    public function scenarios()
    {
        return [
            self::SCENARIO_USER_REGISTER => ['ImgFile', 'UserName', 'FirstName', 'LastName', 'Password', 'Email', 'RoleID'],
            self::SCENARIO_USER_LOGIN => ['UserName', 'Password']
        ];
    }

    public function rules()
    {
        return [
            [['ImgFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['UserName', 'FirstName'], 'required'],
            [['UserName', 'LastName'], 'string', 'min' => 3, 'max' => 64],
            [['UserName', 'Password'], 'string', 'min' => 4, 'max' => 32],
            [['Email'], 'email'],
            [['Password'], 'required', 'on' => self::SCENARIO_USER_REGISTER],
            [['RoleID'], 'default', 'value' => 2, 'on' => self::SCENARIO_USER_REGISTER],
        ];
    }

    public function register()
    {
        /* $webroot = Yii::getPathOfAlias('webroot');
        $file =  $webroot . DIRECTORY_SEPARATOR . 'Files/Images/Icons' . DIRECTORY_SEPARATOR . '$this->ImgFile->baseName . '.' . $this->ImgFile->extension';
        $handle = fopen($file, 'w');
        // ===========
        // Define the path where you want to create the file
        $path = Yii::getAlias('@app') . 'frontend/Files/Images/Icons' . $this->ImgFile->baseName . '.' . $this->ImgFile->extension;
        // Open the file for writing
        $fileHandle = fopen($path, 'w');
        // Write the content to the file
        fwrite($fileHandle, $this->ImgFile);
        // Close the file handle
        fclose($fileHandle); */
        $this->ImgPath = Yii::getAlias('@app') . '/Files/Images/Icons/' . $this->ImgFile->baseName . '.' . $this->ImgFile->extension;
        $this->ImgFile->saveAs($this->ImgPath);

        if (file_exists($this->ImgPath)) {
            $query1 = "INSERT INTO users (img_path, username, first_name, last_name, password, email, role_id) VALUES 
            ('$this->ImgPath', '$this->UserName', '$this->FirstName', '$this->LastName', '$this->Password', 
            '$this->Email', '$this->RoleID')";

            try {
                Yii::$app->db->createCommand($query1)->execute();
            } catch (ErrorException $e) {
                Yii::$app->session->setFlash('danger', 'Error: ' . $e);

                return false;
            }

            $query2 = "SELECT * FROM users WHERE username = '$this->UserName'";
            $result = Yii::$app->db->createCommand($query2)->queryOne();
            Yii::$app->session->set('user', $result);

            return true;
        } else {
            Yii::$app->session->setFlash('danger', 'Error occured in saving process!');
            return false;
        }
    }
    public function login()
    {
        $query = "SELECT * FROM users WHERE username = '$this->UserName'";
        $result = Yii::$app->db->createCommand($query)->queryOne();
        if (empty($result)) {
            Yii::$app->session->setFlash('danger', 'User does not exist!');
            return false;
        }
        if ($result['password'] == $this->Password) {
            if ($result['role_id'] == 1)
                Yii::$app->session->set('admin', $result);
            else
                Yii::$app->session->set('user', $result);

            return true;
        } else {
            Yii::$app->session->setFlash('danger', 'Wrong password!');
        }
    }

    /* public function update()
    {
        $query = "UPDATE users 
        SET img_path=$this->ImgPath, username=$this->UserName, first_name=$this->FirstName,
        last_name=$this->LastName, password=$this->Password, email=$this->Email, role_id=$this->RoleID 
        WHERE id=1";
        // if all correct
        return true;
    } */
}
