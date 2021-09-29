<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userplotanduser extends Model
{
    use HasFactory;

    
    protected $table = 'userplot_user';



    protected $fillable = [
        'userplot_id', 
        'user_id',
     ];


    
}
