<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleServicios extends Controller
{

    public function index($servicio){
        
        $servicios = array("ortodoncia"=>["", "https://cdn.pixabay.com/photo/2014/12/10/21/01/doctor-563429_960_720.jpg"],
                          "implantes-dentales"=>["", "https://cdn.pixabay.com/photo/2014/08/26/21/54/dentist-428646_960_720.jpg"],
                          "tratamiento-temporomandibular"=>["", "https://cdn.pixabay.com/photo/2017/07/23/10/44/dentist-2530990_960_720.jpg"],
                           "endodoncia"=>["", "https://cdn.pixabay.com/photo/2014/03/14/16/56/orthodontist-287285_960_720.jpg"],
                           "odontologia-pediatrica"=>["", "https://cdn.pixabay.com/photo/2014/08/26/21/55/dentist-428649_960_720.jpg"],
                           "odontologia-estetica"=>["", "https://cdn.pixabay.com/photo/2016/11/28/12/19/dentist-1864918_960_720.jpg"],
                           "blanqueamiento-dental"=>["", "https://cdn.pixabay.com/photo/2015/10/21/05/26/dentist-998830_960_720.jpg"],
                           "rayos-x"=>["", "https://cdn.pixabay.com/photo/2014/03/14/16/56/orthodontist-287285_960_720.jpg"]);

          $servicioInfo = $servicios[$servicio];
        
        //   echo $servicio."</br>";
        //   print_r($servicioInfo);
        //   exit;
          array_unshift($servicioInfo, $servicio);

          return view("DetalleServicios.index", ['servicio' => $servicioInfo]);
    }
}
