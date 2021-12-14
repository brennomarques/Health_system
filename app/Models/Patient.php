<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // protected $table = "document";

    protected $fillable = ['name', 'last_name', 'age', 'address', 'phone', 'email', 'is_donor'];

}
