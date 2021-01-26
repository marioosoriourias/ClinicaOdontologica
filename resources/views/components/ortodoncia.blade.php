
  
  <h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
  <div class="container mx-auto  mt-6 md:mt-10 ">
    <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">    
        @if (trans('multi-leng.idioma') == 'espanol')
        <p class="pt-10  lg:pt-0 text-justify text-xl px-4"> 
            La ortodoncia es una especialidad dental que corrige la posición de los dientes y los huesos de la mandíbula mal colocados. Los dientes torcidos o que no encajan correctamente son difíciles de mantener limpios y se pueden perder temprano debido al deterioro y la enfermedad periodontal. También causan estrés adicional a los músculos masticadores que pueden provocar dolores de cabeza, síndrome de ATM y dolor en la región del cuello, los hombros y la espalda. Los dientes torcidos o mal colocados también dañan su apariencia.
            <br>
            El tratamiento de ortodoncia se asoció con niños, pero hoy no existe una edad máxima.
            Ofrecemos varios tratamientos de ortodoncia, incluidos aparatos tradicionales fijos, removibles y estéticos. Actualmente hemos probado diferentes alternativas en Ortodoncia y nos adaptamos según tu necesidad. Cada caso se estudia de forma personalizada.
        </p>
        @else
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4"> 
            Orthodontics is a dental specialty that corrects the position of teeth and jaw bones improperly placed. Crooked teeth or teeth that do not fit correctly are difficult to keep clean, and can be lost early due to deterioration and periodontal disease. They also cause extra stress to the chewing muscles that can lead to headaches, TMJ syndrome and pain in the neck, shoulder and back region. Crooked or misplaced teeth also damage your appearance.
            <br>
            Orthodontic treatment was associated with children, but today there is no maximum age.
            <br>
            We offer various orthodontic treatments, including traditional fixed, removable and aesthetic appliances. Currently we have tried different alternatives in Orthodontics and we adapt according to your need. Each case is studied in a personalized way. 
        </p>
        @endif    
  </div>
  
  

  