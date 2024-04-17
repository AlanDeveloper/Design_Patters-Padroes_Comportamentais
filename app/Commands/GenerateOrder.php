<?php

namespace App\Commands;

use App\Models\Budget;
use App\Models\Order;
use DateTimeImmutable;

class GenerateOrder
{
    private float $value;
    private int $items_quantity;
    private string $client_name;

    public function __construct(
        float $value,
        int $items_quantity,
        string $client_name
    )
    {
        $this->value = $value;
        $this->items_quantity = $items_quantity;
        $this->client_name = $client_name;
    }

    public function execute()
    {
        $budget = new Budget();
        $budget->value = $this->value;
        $budget->items_quantity = $this->items_quantity;

        $order = new Order();
        $order->date_finished = new DateTimeImmutable();
        $order->client_name = $this->client_name;
        $order->budget = $budget;

        echo 'Cria pedido no banco de dados ' . PHP_EOL;
        echo 'Envia email para o cliente ' . PHP_EOL;
    }
}