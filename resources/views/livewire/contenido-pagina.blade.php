<div>
    <hr id="nosotros" class="border-solid border-2 border-light-blue-500 mt-20"> 
    
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-1 mt-20">
        <img class="float-right" src="https://cdn.pixabay.com/photo/2016/06/05/14/11/dentist-1437413_960_720.jpg" alt="">
        <span class="px-5 text-justify text-xl"><br>
            <h1 class="text-4xl md:text-5xl mb-5">Bienvenid@ a la clinica dental</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo ratione expedita impedit odio eos tenetur perferendis totam aspernatur. Voluptatibus vel quod quaerat facere quae, excepturi a ea ipsa! Voluptate, necessitatibus!, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id dicta voluptatum natus a rem magnam expedita laudantium quasi debitis eveniet. 
            </p>
            <br>
            <p>
                labore vero. Illo suscipit tempore officia! Animi, esse officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis corrupti corporis quibusdam facere rerum! Molestiae hic voluptates obcaecati officia. Tenetur illo atque a eos, quos temporibus est. Minima, iure recusandae.
            </p>
        </span>
    </div>
    

    <x-detalle-servicios/>

    <hr id="servicios" class="border-solid border-2 border-light-blue-500 mt-20"> 
      

    <!-----------------------------------SECCION DE SERVICIOS----------------------------->
        <div  class="container mt-14 mx-auto md:mt-36">
            <h1 class="text-4xl md:text-5xl text-center mb-12">Nuestros Servicios Dentales</h1>
        
            <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 px-5 text-justify text-xl">    
                
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 0)}}">    
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60  mx-auto ">
                        <figcaption class="font-bold">Examen Bucodental Inicial</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>
   
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 1)}}">    
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Procedimientos de obturación o llenado dental</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>
                
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 2)}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Extracciones dentales</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>

                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 3)}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Ortodoncia</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>

                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 4)}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Tratamientos de blanqueamiento</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 5)}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Puentes dentales</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 6)}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Tratamientos de nervio</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 7)}}">
                        <img src="https://cdn.pixabay.com/photo/2018/05/20/00/29/teeth-3414722_960_720.png" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">Carillas dentales</figcaption>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sint expedita, vitae officiis ad delectus tempore, quia iure sit quo molestias inventore similique neque dolore aliquam quidem odit obcaecati repellat?
                        </p>
                    </a>
                </div>
            
            </div>
        </div>  
        
        
    </div>
</div>
