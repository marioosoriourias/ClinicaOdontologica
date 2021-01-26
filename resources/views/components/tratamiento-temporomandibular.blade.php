<h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
<div class="container mx-auto  mt-6 md:mt-10 ">
  <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">
     @if (trans('multi-leng.idioma') == 'espanol')
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4">          
        La articulación temporomandibular (ATM) es la articulación formada por la parte superior de la mandíbula y el hueso temporal del cráneo. Este hueso actúa como una bisagra deslizante y en ocasiones puede presentar problemas debido a la complejidad de los movimientos que realiza.
        <br>
        Hay tres tipos de trastornos de la ATM:
        <ul class="list-disc ml-10 text-lg">
            <li>Dolor miofascial, que causa dolor en los músculos que controlan los movimientos de la mandíbula.</li>
            <li>Asimetría interna causada por disco desplazado, mandíbula dislocada o lesión del cóndilo.</li>
            <li>Alteraciones degenerativas e inflamatorias de la ATM.</li>
        </ul>
        
        <br>

        <p class="text-justify text-xl px-4">  
        <strong>CAUSAS DE LOS TRASTORNOS DE ATM</strong>
        
        <br>
        Hay muchas causas comunes de trastornos de la ATM, como:
        </p>
        
        <br>

        <ul class="list-disc ml-10 text-lg">
            <li>Bruxismo.</li>
            <li>Estrés o ansiedad.</li>
            <li>Lesión en la mandíbula o la ATM.</li>
            <li>Desgaste del disco o cartílago de la ATM.</li>
            <li>Deterioro debido a artritis reumatoide o gota.</li>
            <li>Otras enfermedades que provocan inflamación de la mandíbula.</li>
        </ul>
        
        <p class="text-justify text-xl px-4">  
        <br>
        <strong>SINTOMAS</strong>
        <br>
        Los siguientes síntomas podrían indicar que tiene un trastorno de la articulación temporomandibular:
        </p>   
        
        <ul class="list-disc ml-10 text-lg">
            <li>Dolor en la mandíbula, cara o cuello.</li>
            <li>Dolor en un lado de la cabeza que aumenta cuando aprieta los dientes.</li>
            <li>Movimiento limitado o bloqueo de la mandíbula.</li>
            <li>Dolor y rigidez en los músculos de la mandíbula.</li>
            <li> Dificultad para masticar.</li>
        </ul>

      @else 
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4">              
            The temporomandibular joint (TMJ) is the joint formed by the upper part of the mandible and the temporal bone of the skull. This bone acts like a sliding hinge and may sometimes present problems due to the complexity of the movements it makes.
        <br>
        There are three types of TMJ disorders:
        </p>

        <ul class="list-disc ml-10 text-lg">
            <li>Myofascial pain, which causes pain in the muscles that control jaw movements.</li>
            <li>Internal asymmetry caused by a displaced disc, dislocated jaw or injury to the condyle.</li>
            <li>Degenerative and inflammatory alterations to the TMJ.</li>

        </ul>
        
        <br>
        
        <p class=" mt-10 text-justify text-xl px-4">        
        <strong>CAUSES OF TMJ DISORDERS</strong>
        <br>
        There are many common causes of TMJ disorders, such as:
        </p>
       
        <ul class="list-disc ml-10 text-lg">
            <li>Bruxism.</li>
            <li>Stress or anxiety.</li>
            <li>Injury to the mandible or the TMJ.</li>
            <li>Wear and tear of the disc or cartilage of the TMJ.</li>
            <li>Impairment due to rheumatoid arthritis or gout.</li>
            <li>Other illnesses that cause inflammation of the jaw.</li>
        </ul>
        
        <p class="text-justify text-xl px-4">  
        <br>
        <strong>SYMPTOMS</strong>
        <br>
        The following symptoms could indicate that you have a temporomandibular joint disorder:
        </p>   
        
        <ul class="list-disc ml-10 text-lg">
            <li>Pain in the jaw, face or neck.</li>
            <li>Pain on one side of the head that increases when you press your teeth together.</li>
            <li>Limited movement or locking of the jaw.</li>
            <li>Pain and stiffness in the muscles of the jaw.</li>
            <li>Difficulty in chewing.</li>
        </ul>
      @endif  
</div>