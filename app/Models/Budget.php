<?php

namespace App\Models;

use App\Abstracts\BudgetState;
use App\Services\BudgetStateTypes\Approved;
use App\Services\BudgetStateTypes\OnApproval;
use DomainException;
use Exception;

class Budget
{
    public float $value;
    public int $items_quantity;
    public BudgetState $state;

    public function __construct() {
        $this->state = new OnApproval();
    }

    public function applyExtraDiscount() : void
    {
        $this->value -= $this->state->calcExtraDiscount($this);
    }

    public function approve() : void
    {
        $this->state->approve($this);
    }

    public function reject() : void
    {
        $this->state->reject($this);
    }

    public function finish() : void
    {
        $this->state->finish($this);
    }
}