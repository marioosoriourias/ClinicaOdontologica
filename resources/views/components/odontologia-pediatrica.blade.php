<h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
<div class="container mx-auto  mt-6 md:mt-10 ">
  <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">
     @if (trans('multi-leng.idioma') == 'espanol')
       <p class="pt-10 lg:pt-0 text-justify text-xl px-4">            
          Los niños no son pequeños adultos. No siempre pueden tener paciencia y colaborar durante un examen dental. En APO Dental Clinic sabemos cómo examinar y tratar a los niños de una manera que los haga sentir cómodos.
          <br>
          Enseñamos a los pacientes jóvenes buenos hábitos dentales que durarán toda la vida
          <br>
          La educación del paciente es un gran enfoque en nuestra práctica. Los guiaremos a usted y a su hijo para que mantengan sus sonrisas saludables. Le instamos a que dé un buen ejemplo y oriente a sus hijos en el cuidado de sus dientes en casa.
          <br>
          Selladores y tratamientos con flúor
          <br>
          Los selladores y los tratamientos con flúor son tratamientos pediátricos preventivos. El flúor, un mineral natural, puede fortalecer los dientes, prevenir la desmineralización y prevenir la caries. Los tratamientos con flúor pueden proteger la salud dental de su hijo durante muchos años.
          <br>
          Cuidamos la dentadura, encía y boca de los niños durante las diferentes etapas de la niñez y adolescencia.
          <br>
          La odontología pediátrica ofrece una amplia variedad de opciones de tratamiento, así como experiencia y capacitación para cuidar los dientes, las encías y la boca de su hijo. Tenga la seguridad de que brindamos la mejor atención posible.          
          <br>
        </p>

      @else 
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4">                
          Children are not small adults. They can not always have patience and collaborate during a dental examination. At the Cosmetic Smile Cabos clinic we know how to examine and treat children in a way that makes them feel comfortable.
          <br>            
          We teach young patients good dental habits that will last a lifetime
          <br>            
          Patient education is a big focus at our practice. We will guide you and your child in maintaining your healthy smiles. We urge you to set a good example and to guide your children as they care for their teeth at home.
          <br>            
          Sealants and Fluoride Treatments
          <br>            
          Sealants and fluoride treatments are preventative pediatric treatments. Fluoride, a naturally-occurring mineral, can strengthen teeth, prevent demineralization, and ward off decay. Fluoride treatments can protect your child’s dental health for years to come.
          <br>            
          We take care of children’s teeth, gums and mouths during the different stages of childhood and adolescence.
          <br>            
          Pediatric dentistry offers a wide variety of treatment options, as well as experience and training to take care of your child’s teeth, gums and mouth. Rest assured that we provide the best possible care.
          <br>
        </p>
      @endif  
</div>