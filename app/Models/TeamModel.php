<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    protected $table = 'team';
    protected $fillable = [
        'name_team',
        'logo_team',
        'location_team',
        'total_member',
        'member',
        'description_team',
        'scope_team',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
}