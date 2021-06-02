<?php

use yii\db\Migration;

/**
 * Class m210602_074949_contacts
 */
class m210602_074949_contacts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            '{{%contacts}}',
            [ 'id' => $this->primaryKey(),
                'name' => $this->string(100),
                'phone' => $this->string(100)
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
