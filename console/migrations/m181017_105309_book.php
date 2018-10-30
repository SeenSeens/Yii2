<?php

use yii\db\Migration;

/**
 * Class m181017_105309_book
 */
class m181017_105309_book extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'cate' => $this->integer()->notNull()->defaultValue(0),
            'slug' => $this->string()->notNull()->unique(),
            'image' => $this->string(),
            'desc' => $this->string(),
            'content' => $this->text()->notNull(),
            'price' => $this->integer()->notNull()->defaultValue(0),
            'quantity' => $this->integer()->notNull()->defaultValue(0),
            'author' => $this->string(100),
            'page' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'publish_at' => $this->string(20),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ],$tableOptions);
    }

    
    public function down()
    {
        $this->dropTable('{{%book}}');
    }

    public function alterColumn($table, $column, $type)
    {
        $time = $this->beginCommand("alter column $column in table $table to $type");
        $this->db->createCommand()->alterColumn($table, $column, $type)->execute();
        if ($type instanceof ColumnSchemaBuilder && $type->comment !== null) {
            $this->db->createCommand()->addCommentOnColumn($table, $column, $type->comment)->execute();
        }
        $this->endCommand($time);
    }
}
