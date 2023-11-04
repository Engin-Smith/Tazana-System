<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tblpricing_detail';
    protected $primaryKey = 'pd_id';
    public $incrementing = false;
    protected $fillable = [
        'prd_date',
        'pd_id',
        'b_price',
        's_price',
    ];
}
