<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Kategori extends Model
{
    protected $table = 'kategoris';

    use NodeTrait;
    protected $fillable = ['nama_kategori', 'parent_id', 'nilai'];

    public function children() {
        return $this->hasMany(Kategori::class, 'parent_id');
    }

    public function parent() {
        return $this->belongsTo(Kategori::class, 'parent_id');
    }

}
