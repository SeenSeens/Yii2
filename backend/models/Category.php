<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $perent
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    private $_cats = [];
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug',], 'required'],
            [['perent', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên danh mục',
            'slug' => 'Slug',
            'perent' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày update',
        ];
    }
    // De quy danh muc
    public function getParent($perent=0, $level='') {
        $data = Category::find()->where(['perent' =>$perent])->all();
        $level .= '--';
        if($data) :
            foreach ($data as $item) :
                if($item->perent == 0) {
                    $level = '';      
                }
                $this->_cats[$item->id] = $level.$item->name;
                $this->getParent($item->id, $level);
            endforeach;
        endif;
        return $this->_cats;
    }
}
