<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;

     //properties
     protected $table= "subCounty";
     protected $primaryKey= "id";
     protected $fillable= ['name','county_id','created_at','updated_at'];
 
     //relationships (Many)
     public function county (){
     return $this ->hasOne(county::class);
    }
}
