<?php
/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 31/10/2018
 * Time: 14:25
 */

namespace frontend\components;

use Yii;
//use backend\models\Book;
/*
 * Phương thức thêm giỏ hàng
 * @data sẽ lấy theo id or slug
 * @quantity số lượng mỗi lần thêm vào giỏ hàng
 */
class Cart {    
    public $cartstore;
    public $getCost = 0;

    public function __construct() {
        $this->cartstore = Yii::$app->session['cart'];
        $this->getCost = $this->getCost();
    }
    public function add($data, $quantity=1) {
        //var_dump($data); die;
        if(isset($this->cartstore[$data->id])) {
            $this->cartstore[$data->id]->qtt += 1;
            Yii::$app->session['cart'] = $this->cartstore;
        } else {
            $this->cartstore[$data->id] = $data;
            $this->cartstore[$data->id]->qtt = $quantity;
            Yii::$app->session['cart'] = $this->cartstore;
        }
    }

    public function remove($data) {
        unset($this->cartstore[$data->id]);
        Yii::$app->session['cart'] = $this->cartstore;
    }

    public function update($id, $quantity) {
        $this->cartstore[$id]->qtt = $quantity;
        Yii::$app->session['cart'] = $this->cartstore;
    }

    public function getCost() {
        if($this->cartstore) {
            foreach ($this->cartstore as $item) {
                $this->getCost += $item->qtt * $item->price;
            }
        }
        return $this->getCost;
    }

    public function getTotalItem() {
        $total = 0;
        if($this->cartstore) {
            foreach ($this->cartstore as $item) {
                $total += $item->qtt;
            }
        }
        return $total;
    }

    public function removeall() {
        $this->cartstore = [];
        Yii::$app->session['cart'] = $this->cartstore;
    }
}