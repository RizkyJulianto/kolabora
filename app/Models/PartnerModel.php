<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerModel extends Model
{
    protected $table = 'team';
    protected $fillable = [
        'id',
        'name_team',
        'location_team',
        'total_member',
        'description_team',
        'status'
    ];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
