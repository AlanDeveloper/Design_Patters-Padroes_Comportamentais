<?php

namespace App\Commands;

use App\Models\Budget;
use App\Models\Order;
use DateTimeImmutable;

class GenerateOrderHandler
{
    public function __construct(/**OrderRepository */)
    {
        //
    }

    public function execute(GenerateOrder $generate_order) : void
    {
        $budget = new Budget();
        $budget->value = $generate_order->getValue();
        $budget->items_quantity = $generate_order->getItemsQuantity();

        $order = new Order();
        $order->date_finished = new DateTimeImmutable();
        $order->client_name = $generate_order->getClientName();
        $order->budget = $budget;

        echo 'Cria pedido no banco de dados ' . PHP_EOL;
        echo 'Envia email para o cliente ' . PHP_EOL;
    }
}