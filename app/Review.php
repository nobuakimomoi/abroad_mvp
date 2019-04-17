<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //timestamps利用しない
    public $timestamps = false;

    //belongsTo設定①-->companyは単数でOK?
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    
    //belongsTo設定② -->userは単数でOK?
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
