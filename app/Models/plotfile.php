<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plotfile extends Model
{
    use HasFactory;
    public $table = 'plotfiles';

    public $timestamps = false;

    protected $fillable = [
        'plotfiletitle',
        'plotimagedockey'
    ];
}
