<h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
<div class="container mx-auto  mt-6 md:mt-10 ">
  <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">
     @if (trans('multi-leng.idioma') == 'espanol')
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4">         
            Los rayos X ayudan a su dentista a ver lo que sucede debajo de la superficie de sus dientes y encías y a evaluar el nivel óseo y los conductos radiculares. Las radiografías intraorales son el tipo de radiografía más común que se toma en odontología. Dan un alto nivel de detalle del diente, hueso y tejidos de la boca.
            <br>
            Las radiografías permiten a los dentistas:
        </p>

        <ul class="list-disc ml-10 text-lg">
            <li>Encuentra caries.</li>
            <li>Visualice las raíces de los dientes.</li>
            <li>Verificar la salud del área ósea alrededor del diente.</li>
            <li>Determinar si la enfermedad periodontal es un problema de cuidado bucal.</li>
            <li>Ver el estado de desarrollo de los dientes.</li>
        </ul>

        <p class=" mt-10 text-justify text-xl px-4">  
        Las radiografías dentales ayudan a proporcionar información valiosa a su dentista
        <br>
        Las radiografías pueden diagnosticar problemas que de otra manera pasarían desapercibidos, como daños en los maxilares, dientes retenidos, abscesos, quistes o tumores y caries entre los dientes.
        </p>


      @else 
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4">          
            X-rays help your dentist to see what is happening beneath the surface of your teeth and gums and to evaluate bone level and root canals. Intraoral radiographs are the most common type of radiography taken in dentistry. They give a high level of detail of the tooth, bone and tissues of the mouth.
            <br>
            X-rays allow dentists:
        </p>

        <ul class="list-disc ml-10 text-lg">
            <li> cavities.</li>
            <li>Visualize the roots of the teeth.</li>
            <li>Verify the health of the bony area around the tooth.</li>
            <li>Determine if periodontal disease is an oral care problem.</li>
            <li>See the development status of the teeth</li>
        </ul>

        <p class=" mt-10 text-justify text-xl px-4">  
            Dental x-rays help to provide valuable information to your dentist.
            <br>
            X-rays can diagnose problems otherwise unnoticed, such as damage to jawbones, impacted teeth, abscesses, cysts or tumors, and decay between the teeth.            
        </p>
      @endif  
</div>