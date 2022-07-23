<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'name',
      'phone',
      'email',
      'type',
      'description',
      'status',
      'date_at',
    ];
}
