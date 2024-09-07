<?php

use yii\db\Migration;

/**
 * Class m240301_195516_create_audios_db
 */
class m240301_195516_create_audios_db extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createUser();
        $this->createSound();
        $this->createCategory();
        $this->createRole();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240301_195516_create_audios_db cannot be reverted.\n";

        return false;
    }

    private function createUser()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'img_path' => $this->string(),
            'username' => $this->string(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'password' => $this->string(),
            'email' => $this->string(),
            'role_id' => $this->integer(),
        ]);

        $this->insert('users', [
            'img_path' => '/frontend/Files/Images/Icons/Іван Сірко.jpg',
            'username' => 'IvanSirko_admin',
            'first_name' => 'Ivan',
            'last_name' => 'Syrko',
            'password' => '1234',
            'email' => 'bilo@gmail.com',
            'role_id' => 1,
        ]);

        $this->insert('users', [
            'img_path' => '/frontend/Files/Images/Icons/Богдан Хмельницький.jpg',
            'username' => 'Bogdan_Hmelnitsky._.official',
            'first_name' => 'Bogdan',
            'last_name' => 'Hmelnitsky',
            'password' => '1234',
            'email' => 'Hkjbasa@gmail.com',
            'role_id' => 2,
        ]);

        $this->insert('users', [
            'img_path' => '/frontend/Files/Images/Icons/Грушевський Михайло Сергійович.jpg',
            'username' => 'real_GrushovskiyMyhailo',
            'first_name' => 'Grushovskiy',
            'last_name' => 'Myhailo',
            'password' => '1234',
            'email' => 'LdfsfaAa@gmail.com',
            'role_id' => 2,
        ]);
    }
    private function createSound()
    {
        $this->createTable('sound', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'img_path' => $this->string(),
            'audio_path' => $this->string(),
            'report' => $this->string(),
            'date' => $this->string(),
            'category_id' => $this->integer(),
        ]);

        $this->insert('sound', [
            'name' => 'Crackling fireplace',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 1.jpg',
            'audio_path' => '/frontend/Files/Sounds/Fire/Crackling fireplace.mp3',
            'report' => '',
            'date' => '2014-06-20',
            'category_id' => 1,
        ]);

        $this->insert('sound', [
            'name' => 'Campfire crackling fireplace',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 2.jpg',
            'audio_path' => '/frontend/Files/Sounds/Fire/Campfire crackling fireplace.mp3',
            'report' => '',
            'date' => '2015-12-04',
            'category_id' => 1,
        ]);

        $this->insert('sound', [
            'name' => 'Designed fire winds swoosh',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 3.jpg',
            'audio_path' => '/frontend/Files/Sounds/Fire/Designed fire winds swoosh.mp3',
            'report' => '',
            'date' => '2016-12-01',
            'category_id' => 1,
        ]);

        $this->insert('sound', [
            'name' => 'Fire effect',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 4.jpg',
            'audio_path' => '/frontend/Files/Sounds/Fire/Fire effect.mp3',
            'report' => '',
            'date' => '2016-11-26',
            'category_id' => 1,
        ]);

        $this->insert('sound', [
            'name' => 'Fireplace with crackling',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 5.jpg',
            'audio_path' => '/frontend/Files/Sounds/Fire/Fireplace with crackling.mp3',
            'report' => '',
            'date' => '2022-05-17',
            'category_id' => 1,
        ]);

        $this->insert('sound', [
            'name' => 'Fireplace with fire crackling loop',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 6.jpg',
            'audio_path' => '/frontend/Files/Sounds/Fire/Fireplace with fire crackling loop.mp3',
            'report' => '',
            'date' => '2021-05-09',
            'category_id' => 1,
        ]);

        $this->insert('sound', [
            'name' => 'Birds',
            'img_path' => '/frontend/Files/Images/SoundImages/Birds/Birds 1.jpg',
            'audio_path' => '/frontend/Files/Sounds/Birds/Birds.mp3',
            'report' => '',
            'date' => '2013-01-01',
            'category_id' => 2,
        ]);

        $this->insert('sound', [
            'name' => 'Cardinal',
            'img_path' => '/frontend/Files/Images/SoundImages/Birds/Birds 2.jpg',
            'audio_path' => '/frontend/Files/Sounds/Birds/Cardinal.mp3',
            'report' => '',
            'date' => '2006-10-05',
            'category_id' => 2,
        ]);

        $this->insert('sound', [
            'name' => 'Evening birds in spring',
            'img_path' => '/frontend/Files/Images/SoundImages/Birds/Birds 3.jpg',
            'audio_path' => '/frontend/Files/Sounds/Birds/Evening birds in spring.mp3',
            'report' => '',
            'date' => '20017-08-15',
            'category_id' => 2,
        ]);

        $this->insert('sound', [
            'name' => 'Forest with small river and birds',
            'img_path' => '/frontend/Files/Images/SoundImages/Birds/Birds 4.jpg',
            'audio_path' => '/frontend/Files/Sounds/Birds/Forest with small river and birds.mp3',
            'report' => '',
            'date' => '2013-09-20',
            'category_id' => 2,
        ]);

        $this->insert('sound', [
            'name' => 'Forest with wind and birds',
            'img_path' => '/frontend/Files/Images/SoundImages/Birds/Birds 5.jpg',
            'audio_path' => '/frontend/Files/Sounds/Birds/Forest with wind and birds.mp3',
            'report' => '',
            'date' => '2018-09-10',
            'category_id' => 2,
        ]);

        $this->insert('sound', [
            'name' => 'Light rain ambient',
            'img_path' => '/frontend/Files/Images/SoundImages/Rain/Rain 1.jpg',
            'audio_path' => '/frontend/Files/Sounds/Rain/Light rain ambient.mp3',
            'report' => '',
            'date' => '2014-03-04',
            'category_id' => 3,
        ]);

        $this->insert('sound', [
            'name' => 'Rain and thunder',
            'img_path' => '/frontend/Files/Images/SoundImages/Rain/Rain 2.jpg',
            'audio_path' => '/frontend/Files/Sounds/Rain/Rain and thunder.mp3',
            'report' => '',
            'date' => '2022-07-21',
            'category_id' => 3,
        ]);

        $this->insert('sound', [
            'name' => 'Soft rain ambient',
            'img_path' => '/frontend/Files/Images/SoundImages/Rain/Rain 3.jpg',
            'audio_path' => '/frontend/Files/Sounds/Rain/Soft rain ambient.mp3',
            'report' => '',
            'date' => '2019-09-15',
            'category_id' => 3,
        ]);
    }

    private function createCategory()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'img_path' => $this->string(),
            'date' => $this->string(),
        ]);

        $this->insert('category', [
            'name' => 'Rain',
            'img_path' => '/frontend/Files/Images/SoundImages/Rain/Rain 1.jpg',
            'date' => '2012-06-12',
        ]);

        $this->insert('category', [
            'name' => 'Birds',
            'img_path' => '/frontend/Files/Images/SoundImages/Birds/Birds 5.jpg',
            'date' => '2018-10-28',
        ]);

        $this->insert('category', [
            'name' => 'Fire',
            'img_path' => '/frontend/Files/Images/SoundImages/Fire/Fire 3.jpg',
            'date' => '2015-11-02',
        ]);
    }

    private function createRole()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

        $this->insert('role', [
            'name' => 'admin',
        ]);
        $this->insert('role', [
            'name' => 'user',
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240301_195516_create_audios_db cannot be reverted.\n";

        return false;
    }
    */
}
