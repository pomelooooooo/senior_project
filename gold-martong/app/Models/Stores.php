<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'address', 'tel','tax_identification_number','commercial_registration_number'];
    protected $table = 'stores';
}
