<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerModel extends Model
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
        'id_users',
    ];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}