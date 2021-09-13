<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    use HasFactory;
    protected $fillable = ['id_activation_code',
                            'code',
                            'belong_To_Product',
                            'belong_To_User',
                            'is_Activated',
                            'activated_On_Date',
                            'expire_On_Date'];
}
