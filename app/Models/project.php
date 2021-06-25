<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class project extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "project";
    protected $fillable = ['owner_id','title','description','abilitis','price','file_name'];
    
}