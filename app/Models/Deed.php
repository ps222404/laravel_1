<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deed extends Model
{
    use HasFactory;
    protected $table = 'deeds';
    protected $fillable = [
        'Narrator',
        'Hadith'
    ];
    protected $guarded = ['*', 'id'];
}
