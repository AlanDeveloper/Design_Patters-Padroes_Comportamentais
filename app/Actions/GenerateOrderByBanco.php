<?php

namespace App\Actions;

use App\Interfaces\Action;
use App\Models\Order;

class GenerateOrderByBanco implements Action
{
    public function execute(Order $order) : void
    {
        echo "Salvo no banco";
    }
}