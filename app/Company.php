<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //timestamps利用しない
    public $timestamps = false;

    //primaryKeyの変更
    protected $primaryKey = "id";

    //hasMany設定
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
