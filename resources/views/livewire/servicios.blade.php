<div>
    <span id="ServiciosImg"></span>
    <hr id="servicios" class="border-solid border-2 border-light-blue-500 mt-20 "> 
   
    <!-----------------------------------SECCION DE SERVICIOS----------------------------->
        <div  id="ServiciosText" class="mt-14 mx-auto md:mt-36 opacity-0">

           
            {{-- <h1 class="text-4xl md:text-5xl text-center mb-12">{{trans('multi-leng.mensaje-servicios')}}</h1>    --}}
            <a href="{{route('serviciosLista')}}">
                <video class=" bg-container w-full"  loop="true"  autoplay="autoplay"  muted>     
                    @if (trans('multi-leng.idioma') == 'espanol')      
                        <source src="{{asset('videos/SERVICIOS1.mp4')}}" type="video/mp4">
                        <source src="{{asset('videos/SERVICIOS1.ogg')}}" type="video/ogg">
                    @else
                        <source src="{{asset('videos/SERVICES.mp4')}}" type="video/mp4">
                        <source src="{{asset('videos/SERVICES.ogg')}}" type="video/ogg">
                    @endif
                    Your browser does not support the video tag.
                </video>
            </a>

            <div class="container mx-auto hidden mt-10 sm:grid-cols-2  lg:grid-cols-3 gap-8 px-5 text-justify text-xl">                  
                           
                <div class="pb-7">  
                    <div class="bg-blue-400 h-14 w-full border-black border-2">  
                        <h1 class="text-2xl text-center">{{trans('multi-leng.ortodoncia')}}</h1>
                    </div>                 
                        <div class="servicio-desc h-64">
                            <a  href="{{route('servicios', 'ortodoncia')}}">    
                            <img src="{{asset('imgs/icons/teeth.png')}}" alt="" class="w-96 sm:w-full mx-auto ">
                            <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                La ortodoncia es una especialidad dental que corrige la posición de los dientes y los huesos de la mandíbula mal colocados. Los dientes torcidos o que no encajan correctamente son difíciles de mantener limpios y se pueden perder temprano debido al deterioro y la enfermedad periodontal.
                                La ortodoncia es una especialidad dental que corrige la posición de los dientes y los huesos de la mandíbula mal colocados. Los dientes torcidos o que no encajan correctamente son difíciles de mantener limpios y se pueden perder temprano debido al deterioro y la enfermedad periodontal. 
                                @else
                                Orthodontics is a dental specialty that corrects the position of teeth and jaw bones improperly placed. Crooked teeth or teeth that do not fit correctly are difficult to keep clean, and can be lost early due to deterioration and periodontal disease.
                                @endif
                            </p>
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'ortodoncia')}}" class="button">Leer más<a></p>
                            </div>
                            </a>
                        </div>
                </div>


                <div class="pb-7"> 
                    <div class="bg-blue-400 h-14 w-full border-black border-2">
                        <h1 class="text-2xl text-center">{{trans('multi-leng.implantes-dentales')}}</h1>
                    </div>
                    <div class="servicio-desc h-64">
                        <a href="{{route('servicios', 'implantes-dentales')}}"> 
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                Los pacientes de implantes son de todas las edades y los implantes pueden ser la opción correcta para cualquier persona que le falte uno o más o incluso todos los dientes debido a una lesión, enfermedad o caries. Son especialmente prácticos para pacientes que ya no pueden usar prótesis removibles.
                                @else
                                Implant patients are of all ages and implants may be the right choice for anyone missing one or more or even all of their teeth due to injury, disease or decay. They are especially practical for patients who can no longer wear removable dentures.
                                @endif
                            </p>   
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'implantes-dentales')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>



                <div class="pb-7"> 
                    <div class="bg-blue-400 h-16 w-full border-black border-2">
                        <h1 class="text-2xl text-center">{{trans('multi-leng.tratamiento-temporomandibular')}}</h1>
                    </div>
                       
                    <div class="servicio-desc  h-64">
                        <a href="{{route('servicios', 'tratamiento-temporomandibular')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                La articulación temporomandibular (ATM) es la articulación formada por la parte superior de la mandíbula y el hueso temporal del cráneo. Este hueso actúa como una bisagra deslizante y en ocasiones puede presentar problemas debido a la complejidad de los movimientos que realiza.
                                @else
                                The temporomandibular joint (TMJ) is the joint formed by the upper part of the mandible and the temporal bone of the skull. This bone acts like a sliding hinge and may sometimes present problems due to the complexity of the movements it makes.
                                @endif
                            </p>       
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'tratamiento-temporomandibular')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>




                <div class="pb-7"> 
                    <div class="bg-blue-400 h-14 w-full border-black border-2"> 
                        <h1 class="text-2xl text-center">{{trans('multi-leng.endodoncia')}}</h1>
                    </div>
                    
                    <div class="servicio-desc  h-64">
                        <a href="{{route('servicios', 'endodoncia')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                Cuando un diente se daña debido a un agrietamiento, una cavidad profunda o cualquier otra lesión en el diente, ya sea en el pasado o recientemente, cuando no se atiende de inmediato, el diente puede infectarse si no se trata. Antes de que el diente muestre algún signo de infección, el problema suele comenzar en lo profundo de la raíz del diente. 
                                @else
                                When a tooth becomes damaged due to cracking, a deep cavity or any other injury to the tooth, either in the past or recently, when not taken care of immediately, the tooth can become infected if left untreated. Before the tooth shows any sign of infection, the problem usually starts deep at the root of the tooth.
                                @endif
                            </p>        
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'endodoncia')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>




                <div class="pb-7"> 
                    <div class="bg-blue-400 h-14 w-full border-black border-2">
                        <h1 class="text-2xl text-center">{{trans('multi-leng.odontologia-pediatrica')}}</h1>
                    </div>
                  
                    <div class="servicio-desc h-64">
                        <a href="{{route('servicios', 'odontologia-pediatrica')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                Los niños no son pequeños adultos. No siempre pueden tener paciencia y colaborar durante un examen dental. En APO Dental Clinic sabemos cómo examinar y tratar a los niños de una manera que los haga sentir cómodos. Enseñamos a los pacientes jóvenes buenos hábitos dentales que durarán toda la vida.
                                @else
                                Children are not small adults. They can not always have patience and collaborate during a dental examination. At the Cosmetic Smile Cabos clinic we know how to examine and treat children in a way that makes them feel comfortable. We teach young patients good dental habits that will last a lifetime.
                                @endif
                            </p>          
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'odontologia-pediatrica')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>




                <div class="pb-7"> 
                    <div class="bg-blue-400 h-14 w-full border-black border-2">
                        <h1 class="text-2xl text-center">{{trans('multi-leng.odontologia-estetica')}}</h1>
                    </div>
                  
                    <div class="servicio-desc  h-64">
                        <a href="{{route('servicios', 'odontologia-estetica')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                Hoy en día contamos con mejores elementos tecnológicos para llegar a un diagnóstico bien planificado y personalizado para evitar los efectos no deseados del metal y la práctica y rehabilitación adecuada, cubriendo altos estándares estéticos utilizando restauraciones libres de metal que tienen una excelente biocompatibilidad.
                                @else
                                Nowadays we have better technologic elements to reach a well planned and personalized diagnosis to avoid the unwanted effects of metal and practice and adequate rehabilitation, covering high cosmetic standards using metal free restorations that have excellent biocompatibility to please the patient´s occlusal and esthetic needs.
                                @endif
                            </p>              
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'odontologia-estetica')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>



                <div class="pb-7"> 
                    <div class="bg-blue-400 h-14 w-full border-black border-2">  
                        <h1 class="text-2xl text-center">{{trans('multi-leng.blanqueamiento-dental')}}</h1>
                    </div> 
                
                    <div class="servicio-desc h-64">
                        <a href="{{route('servicios', 'blanqueamiento-dental')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
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
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'blanqueamiento-dental')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>





                <div class="pb-7">  
                    <div class="bg-blue-400 h-14 w-full border-black border-2">
                        <h1 class="text-2xl text-center">{{trans('multi-leng.rayos-x')}}</h1>
                    </div>
                
                    <div class="servicio-desc h-64">
                        <a href="{{route('servicios', 'rayos-x')}}">
                        <img src="{{asset('imgs/icons/teeth.png')}}" alt=""  class="w-96 sm:w-full mx-auto ">
                        <div class="sidebar-box"> 
                            <p class="text-justify hidden">
                                @if (trans('multi-leng.idioma') == 'espanol')      
                                Los rayos X ayudan a su dentista a ver lo que sucede debajo de la superficie de sus dientes y encías y a evaluar el nivel óseo y los conductos radiculares. Las radiografías intraorales son el tipo de radiografía más común que se toma en odontología. Dan un alto nivel de detalle del diente, hueso y tejidos de la boca
                                @else
                                X-rays help your dentist to see what is happening beneath the surface of your teeth and gums and to evaluate bone level and root canals. Intraoral radiographs are the most common type of radiography taken in dentistry. They give a high level of detail of the tooth, bone and tissues of the mouth.
                                @endif
                            </p>               
                            <p class="read-more bg-indigo-300 text-black"><a href="{{route('servicios', 'rayos-x')}}" class="button">Leer más<a></p> 
                        </div>     
                        </a>
                    </div>
                </div>
        
            </div>
        </div> 
</div>
