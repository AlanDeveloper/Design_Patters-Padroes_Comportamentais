<?php

namespace App\Models;

use DateTimeInterface;

class Order
{
    public string $client_name;
    public DateTimeInterface $date_finished;
    public Budget $budget;
}