<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    static function getViewData()
    {
        return Budget::select('name')->get();
    }

    static function getActiveContractors()
    {
        return Contractor::where('disabled','=',false)->get();
    }

    static function getNumOfActiveContractors()
    {
        return Contractor::getActiveContractors()->count();
    }
}
