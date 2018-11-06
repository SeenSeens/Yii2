<?php

use yii\db\Migration;
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
            'image' => $this->integer(),
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

        //$this->alterColumn('book', 'image', $this->integer());
        // $this->createIndex(
        //     'idx-book-image',
        //     'book',
        //     'image'
        // );

        // $this->addForeignKey(
        //     'fk-book-image',
        //     'book',
        //     'image',
        //     'imagemanager',
        //     'id',
        //     'CASCADE'
        // );
    }

    public function down()
    {
        // $this->dropForeignKey(
        //     'fk-book-image',
        //     'book'
        // );
        // $this->dropIndex(
        //     'idx-book-image',
        //     'book'
        // );
        $this->dropTable('{{%book}}');
    }
}
