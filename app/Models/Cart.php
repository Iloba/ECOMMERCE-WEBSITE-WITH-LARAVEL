<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    //Specify Table name
    public $table = "cart";

    //Fillable
    // protected $fillable = [
    //     'product_id',
    //     'user_id'
    // ];
}
