<?php


namespace common\components\cart;


interface CartItemInterface
{
    /** @returns int */
    public function getCartItemId();
    /** @returns int     */
    public function getCartItemPrice();



}