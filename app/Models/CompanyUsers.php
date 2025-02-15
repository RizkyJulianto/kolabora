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
        'instagram',
        'linkedin',
        'website',
        'profile_company'
    ];
    protected $primaryKey = 'id';
}