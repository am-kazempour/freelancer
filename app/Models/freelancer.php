<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class freelancer extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = "freelancer";
    protected $fillable = ['username','password','firstname','lastname','age','phone_number','email','gender','Marital_status','abilitis','education','bio','languages','profile_photo_name','CV_name'];
    protected $guarded = ['freelancer'];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
