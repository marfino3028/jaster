<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    protected $table      = 'hostings';
    protected $primaryKey = 'hostingId';
    protected $fillable   = [
        'nama_hosting',
        'username_hosting',
        'password_hosting',
        'deleting',
    ];

    public function website() {
        return $this->hasOne('App\Website', 'hostingId');
    }
}
