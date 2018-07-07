<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likedshops extends Model
{
    //

    protected $table = 'likedshops';
    protected $primaryKey = 'id';


    protected $fillable = [
        'user_id', 'shop_id', 'city',
    ];


    public function user(){
        return $this->belongsTo('App\User','id');
    }


}
