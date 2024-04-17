<?php

namespace App\Interfaces;

use App\Models\Order;

interface Action
{
    public function execute(Order $order) : void;
}