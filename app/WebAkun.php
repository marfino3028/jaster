<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebAkun extends Model
{
    protected $table = "web_akuns";

    protected $fillable = ['akun_username', 'akun_email', 'akun_password'];

    public function order()
    {
        return $this->belongsTo('App\Orders', 'webakun_id');
    }
}
