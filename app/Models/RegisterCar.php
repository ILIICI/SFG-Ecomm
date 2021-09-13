<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterCar extends Model
{
    use HasFactory;
    protected $fillable = ['id',
    'assigned_to_user',
    'assigned_activation_code',
    'date_assigned',
    'car_model',
    'car_brand'];
}
