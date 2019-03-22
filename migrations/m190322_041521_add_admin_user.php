<?php

use yii\db\Migration;

/**
 * Class m190322_041521_add_admin_user
 */
class m190322_041521_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'created_at' => date('Y-m-d H:i:sP'),
            'updated_at' => date('Y-m-d H:i:sP'),
            'password' => Yii::$app->security->generatePasswordHash('123456'),
            'auth_key' => Yii::$app->security->generateRandomString()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190322_041521_add_admin_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190322_041521_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
