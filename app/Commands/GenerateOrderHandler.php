<?php

namespace App\Commands;

use App\Actions\GenerateOrderByBanco;
use App\Actions\GenerateOrderByMail;
use App\Interfaces\Action;
use App\Models\Budget;
use App\Models\Order;
use DateTimeImmutable;

class GenerateOrderHandler
{
    private array $actions = [];

    public function __construct(/**OrderRepository */)
    {
        //
    }

    public function add_action(Action $action)
    {
        $this->actions[] = $action;
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

        foreach ($this->actions as $action) {
            $action->execute($order);
        }
    }
}