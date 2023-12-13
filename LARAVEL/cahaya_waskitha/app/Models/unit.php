<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    protected $guarded = ["id"];
    // eager loading ...
    protected $with =['category'];
    use HasFactory;

     // Validasi bahwa drive_mode hanya boleh matic atau manual

     public function category(){
        return $this->belongsTo(category::class);
    }

    public function transaction(){
        return $this->hasMany(transaction::class);
    }
}
