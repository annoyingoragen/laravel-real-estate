<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plotimages extends Model
{
    use HasFactory;
    
    protected $table = 'plotimages';

    public $timestamps = false;

    protected $fillable = [
        'plotimagedockey',
        'plotimagetitle'
    ];
}
