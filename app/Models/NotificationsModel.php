<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationsModel extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'name_notif',
        'message_notif',
        'date_notif',
        'status',
        'id_users'
    ];  
    protected $primaryKey = 'id';
    public function Notification() {
        return $this->belongsTo(User::class, 'id_users');
    }
}