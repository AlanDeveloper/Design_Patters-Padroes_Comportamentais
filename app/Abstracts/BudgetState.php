<?php

namespace App\Abstracts;

use App\Models\Budget;
use DomainException;

abstract class BudgetState
{
    abstract public function calcExtraDiscount(Budget $budget);

    /**
     * Undocumented function
     *
     * @param Budget $budget
     * @throws DomainException
     * @return void
     */
    public function approve(Budget $budget) : void
    {
        throw new DomainException('Este orçamento não pode ser aprovado.');
    }

    /**
     * Undocumented function
     *
     * @param Budget $budget
     * @throws DomainException
     * @return void
     */
    public function reject(Budget $budget) : void
    {
        throw new DomainException('Este orçamento não pode ser reprovado.');
    }

    /**
     * Undocumented function
     *
     * @param Budget $budget
     * @throws DomainException
     * @return void
     */
    public function finish(Budget $budget) : void
    {
        throw new DomainException('Este orçamento não pode ser finalizado.');
    }
}