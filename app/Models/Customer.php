<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tblcustomers';
    protected $primaryKey = 'cust_id';
    public $incrementing = false;
    protected $fillable = [
        'cust_id',
        'cust_name',
        'cust_address',
        'cust_phone'
    ];
}
