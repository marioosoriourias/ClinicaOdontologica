<nav class="bg-white" x-data="{open:false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
         
          <button x-on:click="open=true" class=" sm:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
            <span class="sr-only">Abrir menu principal</span>
            <!-- Icon when menu is closed. -->
            <!--
              Heroicon name: menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
              Heroicon name: x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        

        <!-- Secciones del menu -->
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start h-full">

          <div class="hidden sm:block sm:ml-6 w-full h-full">
            <div class="flex justify-around space-x-4 h-full ">
              
              <div class="clear-left"></div>
              <a href="{{route('inicio')}}" class='hover:bg-indigo-200  px-3 py-2 rounded-md font-medium m-auto text-xl'>{{trans('multi-leng.inicio')}}</a>
              <a href="{{route('inicio')}}/#nosotros" class='hover:bg-indigo-200  px-3 py-2 rounded-md  font-medium m-auto text-xl'>{{trans('multi-leng.nosotros')}}</a>
              <a href="{{route('inicio')}}/#servicios" class='hover:bg-ginbg-indigo-200 px-3 py-2 rounded-md font-medium m-auto text-xl'>{{trans('multi-leng.servicios')}}</a>
              <a href="{{route('inicio')}}/#clientes" class='hover:bg-indigo-200  px-3 py-2 rounded-md font-medium m-auto text-xl'>{{trans('multi-leng.clientes')}}</a> 
              <a href="{{route('inicio')}}/#ubicacion" class='hover:bg-indigo-200 px-3 py-2 rounded-md  font-medium m-auto text-xl'>{{trans('multi-leng.ubicacion')}}</a>    
            </div>
          </div>
        </div>  
    </div>
    </div>
  
    <!--
      Mobile menu, toggle classes based on menu state.
  
      Menu open: "block", Menu closed: "hidden"
    -->
    
    {{--Menu movil--}}
    <div class=" sm:hidden" x-show="open" x-on:click.away = "open=false">
      <div class="px-2 pt-2 pb-3 space-y-1 bg-">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="{{route('inicio')}}" class="border-solid border-2 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{trans('multi-leng.inicio')}}</a>
        <a href="{{route('inicio')}}/#nosotros" class="border-solid border-2 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{trans('multi-leng.nosotros')}}</a>
        <a href="{{route('inicio')}}/#servicios" class="border-solid border-2 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{trans('multi-leng.servicios')}}</a>
        <a href="{{route('inicio')}}/#clientes" class="border-solid border-2 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{trans('multi-leng.clientes')}}</a>
        <a href="{{route('inicio')}}/#ubicacion" class="border-solid border-2 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{trans('multi-leng.ubicacion')}}</a>
      </div>
    </div>
  </nav>



