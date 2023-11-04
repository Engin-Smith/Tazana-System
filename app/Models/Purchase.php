<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tblpurchase';
    protected $primaryKey = 'pch_id';
    public $incrementing = false;
    protected $fillable = [
            'pch_id',
            'pch_date',
            'emp_id',
            'sup_id',
            'grand_total',
    ];
}
