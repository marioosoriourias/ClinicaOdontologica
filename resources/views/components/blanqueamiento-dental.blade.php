<h1 class="text-3xl md:text-4xl text-center  mt-8 md:mt-24">{{trans('multi-leng.'.$nombre)}}</h1>
<div class="container mx-auto  mt-6 md:mt-10 ">
  <img class="float-none  lg:float-left  lg:w-1/2  px-4 lg:mx-5" src="{{$imagen}}" alt="">
     @if (trans('multi-leng.idioma') == 'espanol')
          <p class="pt-10 lg:pt-0 text-justify text-xl px-4">             
            El procedimiento de blanqueamiento dental implica unos sencillos pasos siempre cuidando de proteger tus encías.
            <br>
            <strong> Naturaleza de las manchas / decoloración de los dientes.</strong>
            <br>
            El blanqueamiento dental es más eficaz contra las manchas que se desarrollan en la capa externa o el esmalte de los dientes, conocidas como manchas extrínsecas. Pueden desarrollarse a partir de los alimentos y bebidas que consume, incluidas las salsas oscuras, el vino, el café, los refrescos, etc., o de hábitos poco saludables como fumar y mascar tabaco.
            <br>
            
            <strong>Cómo funciona el blanqueamiento dental.</strong>
            <br>
            El tratamiento de blanqueamiento dental profesional implica un agente blanqueador de fuerza profesional que se aplica a la superficie de los dientes. El gel blanqueador es un compuesto a base de peróxido que rompe sistemáticamente las manchas sobre y debajo de las capas de esmalte dental. Con nuestro sistema de blanqueamiento dental, el agente blanqueador también oxida la estructura del diente, llamada dentina, que está directamente debajo del esmalte, iluminando el cuerpo principal de cada diente.
            <br>
            Le recomendaremos el mejor sistema de blanqueamiento dental según sus necesidades.
            <br>
            Con el cuidado y el mantenimiento adecuados, los resultados del blanqueamiento dental pueden prolongarse.
            <br> 
        </p>  
      @else 
          <p class="pt-10 lg:pt-0 text-justify text-xl px-4">                   
            The dental whitening procedure involves some simple steps always taking care to protect your gums.
            <br>            
            <strong> Nature of teeth stains/discoloration.</strong>
            <br>            
            Teeth whitening is most effective against stains that develop on the outer layer, or enamel, of your teeth – known as extrinsic stains. They can develop from the food and beverages you eat, including dark sauces, wine, coffee, soda, etc., or from unhealthy habits like smoking and chewing tobacco. 
            <br>            
            <strong>How teeth whitening works.</strong>
            <br>            
            Professional teeth whitening treatment involves a professional-strength bleaching agent applied to the surfaces of your teeth. The whitening gel is a peroxide-based compound that systematically breaks up stains on and underneath the layers of tooth enamel. With our teeth whitening system, the bleaching agent also oxidizes the tooth structure, called dentin, that is directly underneath enamel, brightening the main body of each tooth.
            <br>            
            We will recommend the best dental whitening system according to your needs
            <br>
        </p>
      @endif  
</div>