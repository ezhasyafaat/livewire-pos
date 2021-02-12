<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code',          
        'name',
        'category',      
        'stock',         
        'unit',          
        'outprice',      
        'inprice',       
        'description',  
        'image',        
        'supplier',
        'uploaded_by',
        'updated_by',      
    ];
}
