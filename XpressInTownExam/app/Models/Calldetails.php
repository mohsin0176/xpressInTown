<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Calldetails extends Model
{
   
         protected $table='calldetails';
         protected $fillable=[
        'log',
        'date',
        'status',
        'duration'
    	];

}



