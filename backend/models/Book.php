<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property int $cate
 * @property string $slug
 * @property string $image
 * @property string $desc
 * @property string $content
 * @property int $price
 * @property int $quantity
 * @property string $author
 * @property int $page
 * @property int $status
 * @property string $publish_at
 * @property string $created_at
 * @property string $updated_at
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    //public $file;

    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'content', 'page', 'publish_at',], 'required'],
            [['cate', 'price', 'quantity', 'page', 'status', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['name', 'slug', 'image', 'desc'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100],
            [['publish_at'], 'string', 'max' => 20],
            [['slug'], 'unique'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
            //[['file'], 'file', 'extensions' => 'jpg, png, gif']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên sách',
            'cate' => 'Danh mục',
            'slug' => 'Đường dẫn tĩnh',
            'image' => 'Hình ảnh',
            'desc' => 'Mô tả ngắn',
            'content' => 'Nội dung',
            'price' => 'Giá',
            'quantity' => 'Số lượng',
            'author' => 'Tác giả',
            'page' => 'Trang',
            'status' => 'Trạng thái',
            'publish_at' => 'Ngày xuất bản',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
}
