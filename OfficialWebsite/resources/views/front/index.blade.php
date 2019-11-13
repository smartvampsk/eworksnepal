

@extends('layout.app')
@section('content')
<section class="">
   <div class="pb-3">
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
         </ol>
         <div class="carousel-inner carousel-home">
            <div class="carousel-item active">
               <img src="{{ asset('/images/car4.png') }}" class="d-block w-100" alt="...">
               <div class="carousel-top">
                  <h5>Hello</h5>
               </div>
               <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="{{ asset('/images/car1.jpg') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="{{ asset('/images/ai1.jpg') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="{{ asset('/images/car3.jpg') }}" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5>Forth slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
         <img src="{{ asset('/images/prev-arrow.png') }}" aira-hidden="true">
         {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
         {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
         <img src="{{ asset('/images/next-arrow.png') }}">
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>

   <div class="">
      <div class="services">
         <h3 class="text-uppercase text-center py-4 service-heading text-muted">Our Services</h3>
         
         <div class="container">
         	<div class="row">
	            <div class="col-md-4  ">
	               <div class="m-2 shadow bg-white">
	                  <h4 class="border-bottom premium mb-0 text-white">Mobile (Android & IOS)</h4>
	                  {{-- <p class="border-bottom price mb-0 text-white">Connect your customers with a branded channel experience that captures the right data for your business.</p> --}}
	                  <p class="">Connect your customers with a branded channel experience that captures the right data for your business.</p>
	                  <div class="text-center pb-4">
	                     <a href="agenregister">
	                     <button class="btn btn-info">View</button>
	                     </a>
	                  </div>
	               </div>
	           </div>

	            <div class="col-md-4  ">
	               <div class="m-2 shadow bg-white">
	                  <h4 class="border-bottom premium mb-0 text-white">Web Design & Develop</h4>
	                  <p class="border-bottom price mb-0 text-white">hello</p>
	                  <p class="descrip">Hello</p>
	                  <div class="text-center pb-4">
	                     <a href="agenregister">
	                     <button class="btn btn-info">View</button>
	                     </a>
	                  </div>
	               </div>
	            </div>

	            <div class="col-md-4 ">
	               <div class="m-2 shadow bg-white">
	                  <h4 class="border-bottom premium mb-0 text-white">Managed Service</h4>
	                  <p class="border-bottom price mb-0 text-white">Hello</p>
	                  <p class="descrip">Hello</p>
	                  <div class="text-center pb-4">
	                     <a href="agenregister">
	                     <button class="btn btn-info">View</button>
	                     </a>
	                  </div>
	               </div>
	            </div>

	        </div>
         </div>
      </div>

      <div>
         <h3>PORTFOLIO</h3>
      </div>
      <div>
         <h3>TECHNOLOGY STACK</h3>
      </div>
      <div>
         <h3>DEVELOPMENT PROCESS</h3>
      </div>
      <div>
         <h3>OUR CLIENT</h3>
      </div>
      <div>
         <h3>WHAT OUR CLIENT SAYS</h3>
      </div>
   </div>
</section>
@endsection

