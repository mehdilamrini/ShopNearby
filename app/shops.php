<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    //

    protected $table = 'shops';
    protected $primaryKey = 'id';


    protected $fillable = [
        'name', 'image', 'city','description'
    ];


}
