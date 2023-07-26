<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    static function getViewData()
    {
        return Budget::select('name', 'initial_amount', 'amount_left')
            ->get()
            ->map(fn($budget) => array($budget->name,  number_format($budget->initial_amount,2,',','.') , number_format($budget->amount_left,2,',','.')));
    }

    static function getTotalActiveBudget()
    {
        return number_format(Budget::select('initial_amount')->get()->sum('initial_amount'),2,',','.') . "€";
    }

    static function getTotalActiveRemainingBudget()
    {
        return number_format(Budget::select('amount_left')->get()->sum('amount_left'),2,',','.') . "€";
    }
}
