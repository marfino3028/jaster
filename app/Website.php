<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $table      = 'websites';
    protected $primaryKey = 'websiteId';
    protected $fillable   = [
        'hostingId',
        'order_id',
        'domain',
        'tanggal_order'
    ];

    public function order() {
        return $this->belongsTo('App\Orders', 'websiteId');
    }

    public function hosting() {
        return $this->belongsTo('App\Hosting', 'websiteId');
    }
}
