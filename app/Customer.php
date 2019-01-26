<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kasi tau nama tabel
    protected $table = 'customer';

    //laravel defaultnya id
    protected $primaryKey = 'customer_id';

    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
        'customer_id',
        'name',
        'address'
    ];
}