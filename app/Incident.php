<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    public function cars(){
        return $this->belongsToMany('App\Car');
    }

    protected $fillable = [
        'type','description', 'price' , 'grade'
    ];

    public static function getAccidentbyCarID($id){
        $accidente = Incident::where('id', '=', $id)->first();
        return $accidente;
    }
}
