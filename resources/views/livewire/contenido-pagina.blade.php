<div>
    <hr id="nosotros" class="border-solid border-2 border-light-blue-500 mt-10  md:mt-20"> 
    
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-1 mt-10 md:mt-20">
        <img class="float-right" src="{{asset('imgs/bienvenido.jpg')}}" alt="">
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
                    <a href="{{route('servicios', 'ortodoncia')}}">    
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60  mx-auto ">
                        <figcaption class="font-bold">{{trans('multi-leng.ortodoncia')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            La ortodoncia es una especialidad dental que corrige la posición de los dientes y los huesos de la mandíbula mal colocados. Los dientes torcidos o que no encajan correctamente son difíciles de mantener limpios y se pueden perder temprano debido al deterioro y la enfermedad periodontal. 
                            @else
                            Orthodontics is a dental specialty that corrects the position of teeth and jaw bones improperly placed. Crooked teeth or teeth that do not fit correctly are difficult to keep clean, and can be lost early due to deterioration and periodontal disease.
                            @endif
                        </p>
                    </a>
                </div>
   
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'implantes-dentales')}}">    
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.implantes-dentales')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            Los pacientes de implantes son de todas las edades y los implantes pueden ser la opción correcta para cualquier persona que le falte uno o más o incluso todos los dientes debido a una lesión, enfermedad o caries. Son especialmente prácticos para pacientes que ya no pueden usar prótesis removibles.
                            @else
                            Implant patients are of all ages and implants may be the right choice for anyone missing one or more or even all of their teeth due to injury, disease or decay. They are especially practical for patients who can no longer wear removable dentures.
                            @endif
                        </p>
                    </a>
                </div>
                
                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'tratamiento-temporomandibular')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.tratamiento-temporomandibular')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            La articulación temporomandibular (ATM) es la articulación formada por la parte superior de la mandíbula y el hueso temporal del cráneo. Este hueso actúa como una bisagra deslizante y en ocasiones puede presentar problemas debido a la complejidad de los movimientos que realiza.
                            @else
                            The temporomandibular joint (TMJ) is the joint formed by the upper part of the mandible and the temporal bone of the skull. This bone acts like a sliding hinge and may sometimes present problems due to the complexity of the movements it makes.
                            @endif
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'endodoncia')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.endodoncia')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            Cuando un diente se daña debido a un agrietamiento, una cavidad profunda o cualquier otra lesión en el diente, ya sea en el pasado o recientemente, cuando no se atiende de inmediato, el diente puede infectarse si no se trata. Antes de que el diente muestre algún signo de infección, el problema suele comenzar en lo profundo de la raíz del diente. 
                            @else
                            When a tooth becomes damaged due to cracking, a deep cavity or any other injury to the tooth, either in the past or recently, when not taken care of immediately, the tooth can become infected if left untreated. Before the tooth shows any sign of infection, the problem usually starts deep at the root of the tooth.
                            @endif
                        </p>
                    </a>
                </div>

                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'odontologia-pediatrica')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.odontologia-pediatrica')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            Los niños no son pequeños adultos. No siempre pueden tener paciencia y colaborar durante un examen dental. En APO Dental Clinic sabemos cómo examinar y tratar a los niños de una manera que los haga sentir cómodos. Enseñamos a los pacientes jóvenes buenos hábitos dentales que durarán toda la vida.
                            @else
                            Children are not small adults. They can not always have patience and collaborate during a dental examination. At the Cosmetic Smile Cabos clinic we know how to examine and treat children in a way that makes them feel comfortable. We teach young patients good dental habits that will last a lifetime.
                            @endif
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'odontologia-estetica')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.odontologia-estetica')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            Hoy en día contamos con mejores elementos tecnológicos para llegar a un diagnóstico bien planificado y personalizado para evitar los efectos no deseados del metal y la práctica y rehabilitación adecuada, cubriendo altos estándares estéticos utilizando restauraciones libres de metal que tienen una excelente biocompatibilidad.
                            @else
                            Nowadays we have better technologic elements to reach a well planned and personalized diagnosis to avoid the unwanted effects of metal and practice and adequate rehabilitation, covering high cosmetic standards using metal free restorations that have excellent biocompatibility to please the patient´s occlusal and esthetic needs.
                            @endif
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'blanqueamiento-dental')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.blanqueamiento-dental')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            El procedimiento de blanqueamiento dental implica unos sencillos pasos siempre cuidando de proteger tus encías.
                            <br>
                            La naturaleza de las manchas / decoloración de los dientes.
                            @else
                            The dental whitening procedure involves some simple steps always taking care to protect your gums.
                            <br>
                            The nature of teeth stains/discoloration.
                            @endif
                        </p>
                    </a>
                </div>


                <div class="hover:bg-indigo-100">
                    <a href="{{route('servicios', 'rayos-x')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-60 mx-auto">
                        <figcaption class="font-bold">{{trans('multi-leng.rayos-x')}}</figcaption>
                        <p class="text-justify">
                            @if (trans('multi-leng.idioma') == 'espanol')      
                            Los rayos X ayudan a su dentista a ver lo que sucede debajo de la superficie de sus dientes y encías y a evaluar el nivel óseo y los conductos radiculares. Las radiografías intraorales son el tipo de radiografía más común que se toma en odontología. Dan un alto nivel de detalle del diente, hueso y tejidos de la boca
                            @else
                            X-rays help your dentist to see what is happening beneath the surface of your teeth and gums and to evaluate bone level and root canals. Intraoral radiographs are the most common type of radiography taken in dentistry. They give a high level of detail of the tooth, bone and tissues of the mouth.
                            @endif
                        </p>
                    </a>
                </div>         
            </div>
        </div>  
               
    </div>
</div>
