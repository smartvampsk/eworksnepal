
<header class="bg-light">
   <div class="bg-line"></div>
   <div class="header-top">
     {{--  <div class="nav-top text-right border-bottom border-secondary">
         <a class="pr-2" href="careers">Careers</a>
         <a class="pr-4" href="faq">FAQ</a>
      </div> --}}
   </div>

   <nav class="navbar navbar-expand-lg navbar-light py-0">
      <div>
         <a class="navbar-brand logo-name pl-5" href="/">
            <img src="{{ asset('images/logo.png') }}" height="80" class="d-inline-block align-top" alt="{{config('app.name', 'EworksNepal')}}">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
      </div>
      <div class="collapse navbar-collapse">
         <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item nav-item-list">
               <a class="nav-link active home-nav" href="/">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown no-arrow drop-genre pl-4 nav-item-list">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
               <div class="dropdown-menu bg-dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="">Mobile (Android & IOS)</a>
                  <a class="dropdown-item" href="">Web Design & Develop</a>
                  <a class="dropdown-item" href="">Managed Service</a>
                  <a class="dropdown-item" href="">Digital Marketing</a>
                  <a class="dropdown-item" href="">User Experience</a>
               </div>
            </li>
            <li class="nav-item pl-4 nav-item-list">
               <a class="nav-link home-nav" href="">ABOUT</a>
            </li>
            <li class="nav-item pl-4 nav-item-list">
               <a class="nav-link home-nav" href="">NEWS</a>
            </li>
            <li class="nav-item pl-4 nav-item-list">
               <a class="nav-link home-nav" href="">CONTACT</a>
            </li>
         </ul>
      </div>
   </nav>
</header>

