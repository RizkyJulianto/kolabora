<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
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
        'id_company',
        'id_team',
        'id_users',
    ];
    protected $primaryKey = 'id';

    public function company()
    {
        return $this->belongsTo(CompanyUsers::class, 'id_company', 'id');
    }

    public function companys()
    {
        return $this->hasMany(CompanyUsers::class, 'id_project', 'id');
    }
}