<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orders;

class ProgressList extends Model
{
    public $primarykey = 'progresslist_id';
    protected $table = 'progress_lists';

    protected $fillable = ['order_id', 'kategori_id'];

    public function order() {
        return $this->belongsTo('App\Orders', 'progresslist_id');
    }
}
