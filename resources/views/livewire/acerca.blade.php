<div>

    <hr id="acercaDe" class="border-solid border-2 border-light-blue-500 mt-10 md:mt-20 md:mb-20"> 
    

    <span id="AcercaImg"></span>
    {{-- <h1 class="showAcerca opacity-0 text-4xl md:text-5xl text-center mb-12">{{trans('multi-leng.implantes')}}</h1> --}}
       <div class="mt-10 md:mt-20">
            <video class="showAcerca opacity-0 bg-cover w-full"  loop="true"  autoplay="autoplay"  muted>
                @if (trans('multi-leng.idioma') == 'espanol')      
                    <source src="{{asset('videos/IMPLANTES1.mp4')}}" type="video/mp4">
                    <source src="{{asset('videos/IMPLANTES1.ogg')}}" type="video/ogg">
                @else
                    <source src="{{asset('videos/IMPLANTS.mp4')}}" type="video/mp4">
                    <source src="{{asset('videos/IMPLANTS.ogg')}}" type="video/ogg">
                @endif
                Your browser does not support the video tag.
            </video>
        </div>      
        <span id="AcercaDesc" class="px-5 text-justify text-xl col-span-2"><br>
        </span>
</div>
