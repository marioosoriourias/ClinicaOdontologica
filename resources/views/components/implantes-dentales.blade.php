
  
  <h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
  <div class="container mx-auto  mt-6 md:mt-10 ">
    <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">  
        @if (trans('multi-leng.idioma') == 'espanol')
          <p class="pt-10  lg:pt-0 text-justify text-xl px-4">
            Los pacientes de implantes son de todas las edades y los implantes pueden ser la opción correcta para cualquier persona que le falte uno o más o incluso todos los dientes debido a una lesión, enfermedad o caries. Son especialmente prácticos para pacientes que ya no pueden usar prótesis removibles.
            <br>
            Los implantes son reemplazos independientes, que no dependen de los dientes circundantes, como lo hacen los parciales y los puentes.
            <br>
            Los implantes dentales ofrecen ventajas permanentes a largo plazo.
            <br>
            Los implantes logran una estabilidad increíble que no se puede lograr con otras prótesis, como dentaduras postizas o parciales.
            <br>
            Los implantes restauran su sonrisa para una función completa de salud y belleza.
            <br>
            Los implantes dentales ayudan a resolver el problema de un diente faltante de una manera que se ve y se siente muy natural. Un implante es una raíz de diente artificial hecha de titanio. El implante luego sirve como base para dientes de reemplazo individuales, puentes o dentaduras postizas.
            <br>
            Los implantes dentales son sustitutos de las raíces de los dientes perdidos. Actúan como un ancla para un diente de reemplazo o una "corona" o un conjunto de dientes de reemplazo.
            <br>
            Su dentista puede determinar si usted es un candidato para implantes dentales después de una evaluación cuidadosa de su historial médico y dental.
          </p>
        @else 
          <p class="pt-10  lg:pt-0 text-justify text-xl px-4">
            Implant patients are of all ages and implants may be the right choice for anyone missing one or more or even all of their teeth due to injury, disease or decay. They are especially practical for patients who can no longer wear removable dentures.
            <br>
            Implants are freestanding replacements, which do not rely on surrounding teeth, the way partials and bridges do. 
            Dental implants offer permanent, long-term advantages.
            Implants achieve incredibly stability which cannot be accomplished with other prosthetics, such dentures or partials.
            Implants restore your smile for full function, health and beauty.
            <br>
            Dental implants help to solve the problem of a missing tooth in a way that looks and feels very natural. An implant is an artificial tooth root made of titanium. The Implant then serves as a base for individual replacement teeth, bridges or a denture.
            Dental implants are substitutes for the roots of missing teeth. They act as an anchor for a replacement tooth or “crown” or a set of replacement teeth
            <br>
            Your dentist can determine if you are a candidate for dental implants after a careful evaluation of your dental and medical history.
          </p>
        @endif  
      
  </div>