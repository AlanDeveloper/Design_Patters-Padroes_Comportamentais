<?php

namespace App\Actions;

use App\Interfaces\Action;
use App\Models\Order;

class GenerateOrderByMail implements Action
{
    public function execute(Order $order) : void
    {
        echo 'Manda email';
    }
}