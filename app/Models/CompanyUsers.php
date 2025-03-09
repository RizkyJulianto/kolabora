<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyUsers extends Model
{
    protected $table = 'company';
    protected $fillable = [
        'name_company',
        'address_company',
        'slogan',
        'scope_company',
        'contact',
        'email',
        'instagram',
        'linkedin',
        'website',
        'profile_company',
        'id_users'
    ];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function project()
    {
        return $this->hasMany(ProjectModel::class, 'id_company', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}