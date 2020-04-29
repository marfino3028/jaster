<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $primaryKey = 'note_id';

    protected $fillable = ['user_id', 'receiver_id', 'catatan'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
