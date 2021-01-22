<div>
    <hr id="nosotros" class="border-solid border-2 border-light-blue-500 mt-10  md:mt-20"> 
    
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-1 mt-10 md:mt-20">
        <img class="float-right" src="https://cdn.pixabay.com/photo/2016/06/05/14/11/dentist-1437413_960_720.jpg" alt="">
        <span class="px-5 text-justify text-xl"><br>
            <h1 class="text-4xl md:text-5xl mb-5">{{trans('multi-leng.mensaje-inicio')}}</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo ratione expedita impedit odio eos tenetur perferendis totam aspernatur. Voluptatibus vel quod quaerat facere quae, excepturi a ea ipsa! Voluptate, necessitatibus!, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id dicta voluptatum natus a rem magnam expedita laudantium quasi debitis eveniet. 
            </p>
            <br>
            <p>
                labore vero. Illo suscipit tempore officia! Animi, esse officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corrupti corporis quibusdam facere rerum! Molestiae hic voluptates obcaecati officia. Tenetur illo atque a eos, quos temporibus est. Minima, iure recusandae.
            </p>
        </span>
    </div>
    

    <hr id="servicios" class="border-solid border-2 border-light-blue-500 mt-20"> 
      

    <!-----------------------------------SECCION DE SERVICIOS----------------------------->
        <div  class="container mt-14 mx-auto md:mt-36">
            <h1 class="text-4xl md:text-5xl text-center mb-12">{{trans('multi-leng.mensaje-servicios')}}</h1>
            
            <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 px-5 text-justify text-xl">    
                
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'examen-bucodental-inicial')}}">    
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60  mx-auto ">
                        <figcaption class="font-bold">{{trans('multi-leng.examen-bucodental-inicial')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>
   
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'procedimientos-de-obturacion-o-llenado-dental')}}">    
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.procedimientos-de-obturacion-o-llenado-dental')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>
                
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'extracciones-dentales')}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.extracciones-dentales')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>

                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'ortodoncia')}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.ortodoncia')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>

                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'tratamientos-de-blanqueamiento')}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.tratamientos-de-blanqueamiento')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'puentes-dentales')}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.puentes-dentales')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'tratamientos-de-nervio')}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.tratamientos-de-nervio')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'carillas-dentales')}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.carillas-dentales')}}</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>         
            </div>
        </div>  
               
    </div>
</div>
