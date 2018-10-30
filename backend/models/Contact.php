<?php
namespace backend\models;
use yii\db\ActiveRecord;

class Contact extends ActiveRecord {
    /**
     * Tham số đầu tiên tableName
     */
    public static function tableName() {
        return ('contact'); // trả về bảng contact
    }
    /**
     * Tham số thứ 2 là rules
     * Trả về các trường trong database
     */
    public function rules() {
        $rules = [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['name', 'subject'], 'string', 'max' =>255],
            ['email', 'string', 'max' =>100],
            ['email', 'email'],
            ['body', 'safe'], // text gì cũng dc
            [['created_at', 'updated_at'], 'integer']
        ];
        return $rules;
    }
}
