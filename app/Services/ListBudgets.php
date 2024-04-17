<?php

namespace App\Services;

use App\Models\Budget;
use ArrayIterator;
use IteratorAggregate;
use Traversable;

class ListBudgets implements IteratorAggregate
{
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function add(Budget $budget) : void
    {
        $this->budgets[] = $budget;
    }

    public function getIterator() : Traversable
    {
        return new ArrayIterator($this->budgets);
    }
}