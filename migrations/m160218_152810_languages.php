<?php

use yii\db\Schema;
use yii\db\Migration;

class m160218_152810_languages extends Migration
{
    public function up(){
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%languages}}', [
            'id'        => Schema::TYPE_PK,
            'url'      => Schema::TYPE_STRING  . ' NOT NULL',
            'locale'     => Schema::TYPE_STRING  . ' NOT NULL',
            'name'    => Schema::TYPE_STRING  . " NOT NULL",
            'is_default'  => Schema::TYPE_INTEGER . " NOT NULL DEFAULT '0'"
        ], $tableOptions);

        $this->insert('{{%languages}}', [
            'url'         => 'ru',
            'locale'      => 'ru_RU',
            'name'        => 'Русский',
            'is_default'  => 1
        ]);

        $this->insert('{{%languages}}', [
            'url'         => 'en',
            'locale'      => 'en_US',
            'name'        => 'English',
            'is_default'  => 0
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%languages}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}