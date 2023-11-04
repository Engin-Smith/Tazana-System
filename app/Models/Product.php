<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tblproducts';
    protected $primaryKey = 'pd_id';
    public $incrementing = false;
    protected $fillable = [
        'pd_id',
        'pd_name',
        'qty',
    ];
}
