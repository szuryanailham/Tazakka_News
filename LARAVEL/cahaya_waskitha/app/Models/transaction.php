<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{

    protected $guarded = ["id"];
    
    // eager load 
    protected $with = ['unit'];

    use HasFactory;


    public function unit(){
        return $this->belongsTo(unit::class);
    }
}
