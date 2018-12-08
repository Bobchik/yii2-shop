<?php
/**
 * Created by PhpStorm.
 * User: bobka
 * Date: 12/8/18
 * Time: 5:43 AM
 */

namespace backend\services;


class OrderService
{
//    public function checkout($userId, $form): void
//    {
//        $user = $this->findUser($userId);
//
//        if ($user->isBanned()){
//            throw new \DomainException();
//        }
//
//        $cart = $this->findCart($user->id);
//
//        if (!$cart->hasItems){
//            throw new \DomainException();
//        }
//
//        $order = new Order($form->name);
//
//        foreach ($cart->getItems() as $item){
//            $order->addItem($item->getProduct(), $item->getAmount());
//        }
//
//        Yii::$app->db->transaction(function () use ($order, $user, $cart){
//           $order->save();
//           $user->save();
//           $cart->clear();
//           $this->saveCart($cart);
//        });
//
//    }
}