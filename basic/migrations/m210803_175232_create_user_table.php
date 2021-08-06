<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210803_175232_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function up()
    {
        $tableOptions = null;
 
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
 
        $this->createTable('user', [
            'id' int(10) unsigned NOT NULL AUTO_INCREMENT,
            'username' varchar(255) NOT NULL,
            'password' varchar(255) NOT NULL,
            'role' varchar(255) NOT NULL DEFAULT 'user',
    }
 
    public function down()
    {
        $this->dropTable('user');
    }
 
}