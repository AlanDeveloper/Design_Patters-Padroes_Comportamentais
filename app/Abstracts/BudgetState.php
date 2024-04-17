<?php

namespace App\Abstracts;

use App\Models\Budget;
use DomainException;

abstract class BudgetState
{
    abstract public function calcExtraDiscount(Budget $budget);

    public function approve(Budget $budget) : void
    {
        throw new DomainException('Este orçamento não pode ser aprovado.');
    }

    public function reject(Budget $budget) : void
    {
        throw new DomainException('Este orçamento não pode ser reprovado.');
    }

    public function finish(Budget $budget) : void
    {
        throw new DomainException('Este orçamento não pode ser finalizado.');
    }
}