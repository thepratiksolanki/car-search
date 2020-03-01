<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function show(){
        $make = Car::select('make')->distinct()->get();
        $cars = Car::all();
        $data = ['make' => $make,'data' => $cars];
        return $data;
    }

    public function getMakeModel($make){
        $model = Car::select('model')->where("make","=",$make)->get();
        $cars = Car::select()->where("make","=",$make)->get();
        $data = ['model'=>$model,'data'=>$cars];
        return $data;
    }

    public function getModel($model){
        $cars = Car::select()->where("model","=",$model)->get();
        $data = ['data' => $cars];
        return $data;
    }
}
