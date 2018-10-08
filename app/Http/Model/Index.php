<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = 'shop_type';
    protected $primaryKey = 'tid';
    public $timestamps = false;                                
    protected $fillable = ['tname'];

}
