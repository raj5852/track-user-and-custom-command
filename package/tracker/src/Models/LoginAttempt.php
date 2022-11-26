<?php

namespace Raj5852\Usertracker\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAttempt extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','ip_address'];
}
