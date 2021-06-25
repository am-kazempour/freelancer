<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class employer extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = "employer";
    protected $fillable = ['firstname','lastname','password','username'];
    protected $guarded = ['employer'];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
