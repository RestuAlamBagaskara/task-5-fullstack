<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    
    public function categories(){
        return $this->belongTo(Categories::class);
    }

    public function user(){
        return $this->belongTo(User::class);
    }
}
