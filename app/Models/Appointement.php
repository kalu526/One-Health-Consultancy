<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Appointement extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable=[
      'name',
      'email',
      'doctor',
      'date',
      'phone',
      'message',
     'user_id'
    ];
}
