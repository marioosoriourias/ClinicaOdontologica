<div >
    <div class="bg-white h-20">
        {{-- <div class=" mt-5 ml-5 grid grid-cols-1 sm:grid-cols-5 gap-2">
            <a class="bg-red-400 w-1/6" href="{{route('inicio')}}"><img class="w-16" src="{{asset('imgs/icons/logo.png')}}" /></a>
            <span class="bg-red-400 hidden sm:block">40 Park Ave, Brooklyn,<br>New York 70250</span>
            <span class="bg-red-400 hidden sm:block">Call Us <br> 1-800-111-2222</span>
            <span class="bg-red-400 hidden sm:block">Open Hours <br> Mn - Fr: 9:00AM - 5:00PM</span>
            <div>
                <img class="hidden  w-10 h-10 my-auto mx-1 sm:inline-block" src="{{asset('imgs/icons/facebookLogo.png')}}" alt="">
                <img class="hidden  w-10 h-10 my-auto mx-1 sm:inline-block" src="{{asset('imgs/icons/twitterLogo.png')}}" alt="">
                <img class="hidden  w-10 h-10 my-auto mx-1 sm:inline-block" src="{{asset('imgs/icons/instagramLogo.png')}}" alt="">
            </div>
        </div>     --}}
        
        <table class="table w-full">
            <thead>
                <tr>
                    <th><a class="" href="{{route('inicio')}}"><img class="w-48" src="{{asset('imgs/icons/LogoWebv2.png')}}" /></a></th>
                    <th><span class="bg-red hidden sm:block"></th>
           
                    <th><span class="bg-red hidden sm:block"></th>
                    <th>
                        <div>
                            <img class="hidden  w-9   sm:inline-block" src="{{asset('imgs/icons/facebookLogo.png')}}" alt="">
                            <img class="hidden  w-9   sm:inline-block" src="{{asset('imgs/icons/twitterLogo.png')}}" alt="">
                            <img class="hidden  w-9   sm:inline-block" src="{{asset('imgs/icons/instagramLogo.png')}}" alt="">
                        </div>
                    </th>

                    <th>         
                        <!-- This example requires Tailwind CSS v2.0+ -->

                        <select id="idioma" type="dropdown-toggle" class="form-control" name="apports" onchange="top.location.href = this.options[this.selectedIndex].value">
                            <option value="choisir" selected disabled>Idioma</option>                      
                            <option class="apports" value="{{route('language','es')}}">Español</option>
                            <option class="apports" value="{{route('language','en')}}">Ingles</option>
                        </select>

                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <hr class="border-solid border-2 border-light-blue-500 ">
    

</div>
