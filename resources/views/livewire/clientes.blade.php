<div>    
    <hr id="clientes" class="border-solid border-2 border-light-blue-500 mt-10 mb-10 md:mt-20 md:mb-20"> 
    
    <span id="ClientesImg"></span>


    <div  id="ClientesDesc" class="mx-auto container opacity-0">
        {{-- <h1 class="text-4xl md:text-5xl text-center mt-20 mb-12">{{trans('multi-leng.clientes')}}</h1> --}}
    </div>


    <div id="ClientesText" class="opacity-0">
      
        <a href="{{route('pacientes')}}">
          <video class="bg-cover w-full"  loop="true"  autoplay="autoplay"  muted>
            @if (trans('multi-leng.idioma') == 'espanol')      
              <source src="{{asset('videos/PACIENTES1.mp4')}}" type="video/mp4">
              <source src="{{asset('videos/PACIENTES1.ogg')}}" type="video/ogg">
            @else
                <source src="{{asset('videos/PATIENTS.mp4')}}" type="video/mp4">
                <source src="{{asset('videos/PATIENTS.ogg')}}" type="video/ogg">
            @endif
            Your browser does not support the video tag.
          </video>    
        </a>      


      <div class="hidden slideshow-container pt-10">      
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img  class="w-full" src="https://cdn.pixabay.com/photo/2016/01/19/15/05/doctor-1149149_960_720.jpg" style="width:100%">
            <p>Aenean neque lacus, tempus id elementum a, elementum ut massa. Suspendisse dictum aliquet dui, eleifend vestibulum diam iaculis ac. Pellentesque gravida, augue in consectetur egestas, risus mauris auctor arcu, sit amet tempus enim neque at ipsum. Quisque viverra luctus suscipit. Suspendisse at ultrices justo, vitae laoreet orci. Nullam eget pellentesque nisi. Maecenas porta urna at urna accumsan eleifend. Praesent ultricies fringilla massa posuere interdum. Etiam feugiat, nulla ut sodales sodales, leo diam suscipit nunc, ut cursus massa leo ut enim.</p>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img class="w-full"  src="https://cdn.pixabay.com/photo/2014/08/26/21/54/dentist-428646_960_720.jpg" style="width:100%">
            <p>Fusce efficitur eros a ex semper, sodales maximus diam rutrum. Duis eu nunc sed arcu porttitor ultricies eget vitae purus. Praesent sollicitudin finibus posuere. Duis et fermentum lorem. Nunc ultrices porta felis, et mollis turpis. Nam facilisis mi ac lacus auctor dapibus. Fusce eu luctus libero. Aliquam sit amet porttitor tellus, in vulputate quam. Vivamus non magna ac dolor gravida laoreet. Proin iaculis ex tortor, vel ultricies arcu imperdiet nec. Curabitur tincidunt nunc sagittis ipsum laoreet, eget rhoncus eros bibendum. Sed lacus massa, auctor non aliquet ac, rutrum pharetra ex. Sed ultricies eget est et sodales. In egestas porta lectus sed congue.</p>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img class="w-full"  src="https://cdn.pixabay.com/photo/2014/12/10/21/01/doctor-563429_960_720.jpg" style="width:100%">
            <p>Aliquam ullamcorper elit et dictum auctor. Aliquam erat volutpat. Nulla pretium sem sed elit tempor, vel aliquet leo pretium. In sodales placerat varius. Donec sed consequat urna. Curabitur sit amet diam eget tellus ultricies bibendum accumsan nec velit. Morbi maximus ligula mattis, feugiat eros pharetra, auctor lorem. Donec et ante risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla tincidunt est commodo nunc iaculis, quis cursus ipsum rutrum. Integer venenatis ullamcorper metus, id aliquet augue pretium sed. Vivamus tempor nibh nec neque aliquam, a tristique sem suscipit.</p>
          </div>
        </div>
          
      </div>
      <br>
      
      <div class="dots hidden" style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
      </div>
  
    </div>

</div>