<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
   protected $guarded = [];
   public function category(){
   	return $this->belongsTo("App\Category");
   }
   public function commands(){
   	return $this->belongsToMany("App\Commands");
   }
   public function orders(){
        return $this->belongsToMany("App\Order");
    }
}