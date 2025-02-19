<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardsModel extends Model
{
    protected $table = 'rewards';

        protected $fillable = [
            'total_point',
            'point_redeemed',
            'total_amount',
            'wallet_provider',
            'wallet_number',
            'message',
            'status',
            'id_users',
            'id_project',
            'id_company',
        ];

        protected $primaryKey = 'id';
        public function Rewards() {
            return $this->belongsTo(User::class , 'id_users');
        }
}
