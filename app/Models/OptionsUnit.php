<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionsUnit extends Model
{
    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }

    use HasFactory;
}
