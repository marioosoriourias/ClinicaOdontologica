<h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
<div class="container mx-auto  mt-6 md:mt-10">
  <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">
     @if (trans('multi-leng.idioma') == 'espanol')
          <p class="pt-10 lg:pt-0 text-justify text-xl px-4">         
            Hoy en día contamos con mejores elementos tecnológicos para llegar a un diagnóstico bien planificado y personalizado para evitar los efectos no deseados del metal y la práctica y rehabilitación adecuada, cubriendo altos estándares estéticos utilizando restauraciones libres de metal que tienen una excelente biocompatibilidad para complacer las necesidades oclusales y estéticas del paciente. estas necesidades son alta resistencia, translucidez y un ajuste marginal adecuado.
            <br>
            Modificando la posición, tamaño, forma y color diseñamos una sonrisa acorde a su belleza
            <br>
            En APO Dental Clinic, ofrecemos una variedad de tratamientos cosméticos innovadores, que incluyen carillas de porcelana, coronas de porcelana y adhesivos y contornos dentales. También ofrecemos el contorno de las encías.
            <br>  
        </p>

      @else 
          <p class="pt-10 lg:pt-0 text-justify text-xl px-4">                    
            Nowadays we have better technologic elements to reach a well planned and personalized diagnosis to avoid the unwanted effects of metal and practice and adequate rehabilitation, covering high cosmetic standards using metal free restorations that have excellent biocompatibility to please the patient´s occlusal and esthetic needs, these needs being high resistance, translucency, and an adequate marginal fit.
            <br>
            Modifying the position, size, shape and color we design a smile according to its beauty
            <br>
            At Cosmetic Dental Cabos clinic, we offer an array of innovative cosmetic treatments, including porcelain veneers, porcelain crowns, and dental bonding and contouring. We offer gum contouring, as well.
            <br>
        </p>
      @endif  
</div>