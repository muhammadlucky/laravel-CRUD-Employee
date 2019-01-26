<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //kasi tau nama tabel
    protected $table = 'supplier';

    //laravel defaultnya id
    protected $primaryKey = 'supplier_id';
    
    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
        'supplier_id',
        'supplier_name',
        'supplier_address'
    ];

}
