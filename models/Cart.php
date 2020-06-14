<?php


namespace app\models;

/*Array
(
    [1] => Array
    (
        [qty] => QTY
        [name] => NAME
        [price] => PRICE
        [img] => IMG
    )
    [10] => Array
    (
    [qty] => QTY
    [name] => NAME
    [price] => PRICE
    [img] => IMG
    )
    [qty] => QTY,
    [sum] => SUM
)*/

use yii\base\Model;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1){
        $mainImg = $product->getImage();
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        }
        else{
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'alias' => $product->alias,
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $mainImg->getUrl(),
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty'])
            ? $_SESSION['cart.qty'] + $qty
            : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum'])
            ? $_SESSION['cart.sum'] + $qty * $product->price/100
            : $qty * $product->price/100;
    }

    public function deleteFromCart($product){
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart.qty'] = isset($_SESSION['cart.qty'])
                ? $_SESSION['cart.qty'] - $_SESSION['cart'][$product->id]['qty']
                : 0;
            $_SESSION['cart.sum'] = isset($_SESSION['cart.sum'])
                ? $_SESSION['cart.sum'] - $_SESSION['cart'][$product->id]['qty'] * $product->price/100
                : 0;

            unset($_SESSION['cart'][$product->id]);
        }
        else{
            return false;
        }

    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
}