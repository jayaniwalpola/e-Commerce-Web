<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    //because both the model name and
    //the table name are singular we assign the table name to a variable as below
    public $table="cart";
}
