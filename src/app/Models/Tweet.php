<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Tweet extends Model
{
    use HasFactory;
    public function member() : Relation {
        return $this->belongsTo(Member::class);
    }
}
