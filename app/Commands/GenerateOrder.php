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

    public function getValue() : float
    {
        return $this->value;
    }

    public function getItemsQuantity() : int
    {
        return $this->items_quantity;
    }

    public function getClientName() : string
    {
        return $this->client_name;
    }
}