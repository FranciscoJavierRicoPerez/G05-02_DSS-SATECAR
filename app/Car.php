<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function concessionaire(){
        return $this->belongsTo('App\Concessionaire');
    }

    protected $fillable = [
        'enrollment','years', 'km' , 'trademark', 'color' ,'fuelConsumption'
    ];

    //Esta funcion devuelve los accidentes de un coche
    public static function getAllIncidentsByCar($idCoche){
        $accidentes_sufridos = DB::table('suffers')->select('incident_id', 'date')->where('car_id', '=', $idCoche)->get();
        return $accidentes_sufridos;
    }

    // ESTA FUNCION LA HE HECHO YO NO LA BORREIS AL ARREGLAR CONFLICTOS PLEASEEEE
    public static function getCarById($id){
        $coche = Car::where('id', '=', $id)->first();
        return $coche;
    }
}
