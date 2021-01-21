<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleServicios extends Controller
{

    public function index($servicio){
        
        $servicios = array("examen-bucodental-inicial"=>["Examen bucodental inicia, Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?dd", "https://cdn.pixabay.com/photo/2014/12/10/21/01/doctor-563429_960_720.jpg"],
                           "procedimientos-de-obturacion-o-llenado-dental"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?aa", "https://cdn.pixabay.com/photo/2014/08/26/21/54/dentist-428646_960_720.jpg"],
                           "extracciones-dentales"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2017/07/23/10/44/dentist-2530990_960_720.jpg"],
                           "ortodoncia"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2016/07/13/14/52/zahnreinigung-1514692_960_720.jpg"],
                           "tratamientos-de-blanqueamiento"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2014/03/14/16/56/orthodontist-287285_960_720.jpg"],
                           "puentes-dentales"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2014/08/26/21/55/dentist-428649_960_720.jpg"],
                           "tratamientos-de-nervio"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2016/11/28/12/19/dentist-1864918_960_720.jpg"],
                           "carillas-dentales"=>["Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2015/10/21/05/26/dentist-998830_960_720.jpg"]);



        // if($id >= 0 && $id <= 7){
        //     $servicios = array (
        //         array("Examen Bucodental Inicial","Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?dd", "https://cdn.pixabay.com/photo/2014/12/10/21/01/doctor-563429_960_720.jpg"),
        //         array("Procedimientos de obturación o llenado dental","Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?aa", "https://cdn.pixabay.com/photo/2014/08/26/21/54/dentist-428646_960_720.jpg"),
        //         array("Extracciones dentales", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2017/07/23/10/44/dentist-2530990_960_720.jpg"),
        //         array("Ortodoncia", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2016/07/13/14/52/zahnreinigung-1514692_960_720.jpg"),
        //         array("Tratamientos de blanqueamiento", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2014/03/14/16/56/orthodontist-287285_960_720.jpg"),
        //         array("Puentes dentales", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2014/08/26/21/55/dentist-428649_960_720.jpg"),
        //         array("Tratamientos de nervio", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2016/11/28/12/19/dentist-1864918_960_720.jpg"),
        //         array("Carillas dentales", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?", "https://cdn.pixabay.com/photo/2015/10/21/05/26/dentist-998830_960_720.jpg"),
        //     );
        // }

        // else{
        //     return redirect('/');
        // }

        //   echo '<pre>';
        //   print_r($servicios[$id]);
        //   echo '</pre>';
        
          $servicioInfo = $servicios[$servicio];
          array_unshift($servicioInfo, ucwords(str_replace("-"," ",$servicio)));
          
          return view("DetalleServicios.index", ['servicio' => $servicioInfo]);
    }
}
