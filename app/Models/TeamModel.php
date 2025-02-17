<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    protected $table = 'team';
    protected $fillable = [
        'name_project',
        'description_project',
        'project_type',
        'deadline',
        'skills',
        'salary',
        'collaboration_type',
        'total_members',
        'experience',
        'experience_year',
        'date_project',
        'status',
        'id_company'
    ];
    protected $primaryKey = 'id';
}