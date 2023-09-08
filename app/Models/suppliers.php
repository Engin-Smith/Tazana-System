<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_suppliers';
    protected $primaryKey = 'sup_id';
    public $incrementing = false;
    protected $fillable = [
        'sup_id',
        'sup_name',
        'sup_detail',
        'sup_contact'
    ];
}
