<h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
<div class="container mx-auto  mt-6 md:mt-10 ">
  <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">
     @if (trans('multi-leng.idioma') == 'espanol')
        <p class="pt-10 lg:pt-0 text-justify text-xl px-4">      
            Cuando un diente se daña debido a un agrietamiento, una cavidad profunda o cualquier otra lesión en el diente, ya sea en el pasado o recientemente, cuando no se atiende de inmediato, el diente puede infectarse si no se trata. Antes de que el diente muestre algún signo de infección, el problema suele comenzar en lo profundo de la raíz del diente. Los dientes están conectados a nuestro cuerpo a través de terminaciones nerviosas y vasos sanguíneos que están conectados a los dientes a través de un conducto radicular que está lleno de pulpa. Cuando comienza el dolor, generalmente es una señal de que puede tener una infección. El dolor se debe a que los nervios y la pulpa que los rodea se han infectado. Esto sucede cuando el diente se daña por un trauma que no se atendió o cuando una caries ha caído del esmalte o la corona a la parte más profunda del conducto radicular. Si no se trata, esto puede causar muchos problemas más adelante, como un absceso de la mandíbula que podría destruir el hueso que rodea el diente. Hace muchos años, cuando esto sucedía, los dentistas simplemente sacan el diente y tratan la infección con antibióticos. El tratamiento moderno de hoy se llama Pulpectomía y lo realiza un Cirujano Dental altamente capacitado y capacitado en Endodoncia, que es la especialidad dental que estudia y se enfoca en la pulpa dental, sus enfermedades y su tratamiento.
            <br>
            Cuando comienza el dolor, suele ser una señal de que puede tener una infección.
            <br>
            El dolor se debe a que los nervios y la pulpa que los rodea se han infectado.
            <br>
            La pulpectomía la realiza un cirujano Dentista altamente capacitado y capacitado en Endodoncia, que es la especialidad dental que estudia y se enfoca en la pulpa dental, sus enfermedades y su tratamiento.
            <br>
            El resultado final es un diente sano que podrá conservar.
            <br>
            En lugar de tirar de la pieza dañada y reemplazarla ya sea con un implante dental o con un puente removible, el Dr. Limón puede realizar una Pulpectomía que consiste en hacer una abertura en el diente dañado y extraer la pulpa infectada y nerviosa dañada para luego rellenar el conducto radicular con un material especial llamado gutapercha para luego sellar el conducto con un cemento especial.
            <br>
            Un tratamiento de conducto no es doloroso como muchas personas creen, es solo un proceso largo que a veces puede requerir más de una visita.
        </p>

      @else 
      <p class="pt-10 lg:pt-0 text-justify text-xl px-4">        
            When a tooth becomes damaged due to cracking, a deep cavity or any other injury to the tooth, either in the past or recently, when not taken care of immediately, the tooth can become infected if left untreated. Before the tooth shows any sign of infection, the problem usually starts deep at the root of the tooth. Teeth are connected to our bodies thru nerve endings and blood vessels that are connected to the teeth thru a root canal that is filled with pulp. When pain starts, it is usually a sign that you may have an infection. The pain is caused because the nerves and pulp which surrounds those nerves has become infected. This happens either when the tooth becomes damaged by trauma that was left uncared for or when a cavity has dropped from the enamel or crown to the deepest part of the root canal. If left untreated, this can cause many problems later on, like a jaw abscess that could potentially destroy the bone that surround the tooth. Many years ago, when this happened, dentists just pulled the tooth out and treated the infection with antibiotics. Todays modern treatment is called a Pulpectomy and it is done by a Dental Surgeon who is highly trained and skilled in Endodontics, which is the dental specialty that studies and focuses on the dental pulp, its diseases and treatment.
            <br>
            When pain starts, it is usually a sign that you may have an infection
            <br>
            The pain is caused because the nerves and pulp which surrounds those nerves has become infected.
            <br>
            <strong>Pulpectomy</strong>
            <br>
            Pulpectomy and it is done by a Dental Surgeon who is highly trained and skilled in Endodontics, which is the dental specialty that studies and focuses on the dental pulp, its diseases and treatment.
            <br>
            The end result is a healthy tooth that you will be able to keep
            <br>
            Instead of pulling the damaged piece and replacing it either with a dental implant or a removable bridge, Dr. Limón can perform a Pulpectomy which consists of making an opening in the damaged tooth and extracting the infected pulp and damaged nerved so he can then fill the root canal with a special material called gutta-percha so he can then seal the canal with a special cement.
            <br>
            A root canal is not painful as many people believe, it is just a lengthy process that can sometimes take more than one visit.
        </p>
      @endif  
</div>