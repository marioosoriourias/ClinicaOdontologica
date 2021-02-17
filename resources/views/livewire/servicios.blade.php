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
        </div> 
</div>
