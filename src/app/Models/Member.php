<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;

class Member extends Model
{
    use HasFactory;
     public function tweet() : Relation {
        return $this->hasMany(Tweet::class);
    }
}
