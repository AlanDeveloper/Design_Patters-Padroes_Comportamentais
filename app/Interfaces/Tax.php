<?php

namespace App\Interfaces;

use App\Models\Budget;

interface Tax
{
    public function calc(Budget $budget) : float;
}