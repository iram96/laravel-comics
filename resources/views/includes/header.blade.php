@php

$menu = config('menu');


@endphp





    <header>
        <div class='top-header'>
            <div class="container">

                <span>DC POWER VISA</span>
            </div>
        </div>
        <div  class="container">
            <div class="row-mine center-mine">
                <div class="hm-col">
              <img  class=" dc-logo" src="{{ asset('../images/dc-logo.png') }}" alt="">

                </div>
               <nav  class="hm-col align-baseline">
              <ul class="list-cl">
                  @foreach ($menu as $item)
                      
                  <li>
                      <a  href="{{ route($item['route']) }}" class="no-txtdec" > {{ $item['name'] }}</a>
                  </li>
                  @endforeach
                   
                
               </ul>

            </nav>

            </div>
        </div>
    </header>
    

