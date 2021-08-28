<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userplot extends Model
{
    use HasFactory;

    
    protected $table = 'userplots';

    public $timestamps = false;

    protected $fillable = [
        'name', 
        'fathername',
         'email',
         'cnic',
         'occupation',
         'telephone',
         'cellno',
         'mailingaddress',
         'permanentaddress',
         'age',



         'plotaddress',
         'regnum',
         'pricepermarla',
         'bookingdate',
         'plotprice',
         'plotimagedockey',
         'rent_sale'
    ];
}
