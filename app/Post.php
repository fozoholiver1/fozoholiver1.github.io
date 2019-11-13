<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Post extends Model
{
    use Searchable;
    protected $fillable = [
        'caption','image',
   ];
   //
   public function user(){
       return $this->belongsTo(User::class);
   }

}
