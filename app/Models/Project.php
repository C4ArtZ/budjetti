<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    static function getViewData()
    {
        return Project::select('name', 'contractor', 'cost')
            ->get()
            ->map(fn($project) => array($project->name,  $project->contractor , number_format($project->cost,2,',','.') . "€"));
    }

    static function getActiveProjects()
    {
        return Project::where('disabled','=',false)->get();
    }

    static function getNumOfActiveProjects()
    {
        return Project::getActiveProjects()->count();
    }
}
