 @extends('layout.app') @section('content')
<section>
    <div class="">
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
            	<span class="sr-only">Previous</span>
         	</a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
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
                    <div class="col-md-4 pb-4">
                        <img class="services-img rounded-pill" src="{{ asset('images/mobile1.jpeg') }}">
                        <div class="m-2 rounded shadow bg-white">
                            <h4 class="border-bottom premium mb-0 text-white">Mobile (Android & IOS)</h4>
                            <p class="descrip">Connect your customers with a branded channel experience that captures the right data for your business.</p>
                            <div class="text-center pb-4">
                                <a href="">
                        <button class="btn btn-info">View</button>
                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <img class="services-img rounded-pill" src="{{ asset('images/web3.png') }}">
                        <div class="m-2 rounded shadow bg-white">
                            <h4 class="border-bottom premium mb-0 text-white">Web Design & Develop</h4>
                            <p class="descrip">Connect your customers with a branded channel experience that captures the right data for your business.</p>
                            <div class="text-center pb-4">
                                <a href="">
                        <button class="btn btn-info">View</button>
                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <img class="services-img rounded-pill" src="{{ asset('images/mobile1.jpeg') }}">
                        <div class="m-2 rounded shadow bg-white">
                            <h4 class="border-bottom premium mb-0 text-white">Managed Service</h4>
                            <p class="descrip">Connect your customers with a branded channel experience that captures the right data for your business.</p>
                            <div class="text-center pb-4">
                                <a href="">
                        <button class="btn btn-info">View</button>
                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <img class="services-img rounded-pill" src="{{ asset('images/dollar.jpg') }}">
                        <div class="m-2 rounded shadow bg-white">
                            <h4 class="border-bottom premium mb-0 text-white">Digital Marketing</h4>
                            <p class="descrip">Connect your customers with a branded channel experience that captures the right data for your business.</p>
                            <div class="text-center pb-4">
                                <a href="">
                        <button class="btn btn-info">View</button>
                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <img class="services-img rounded-pill" src="{{ asset('images/dollar.jpg') }}">
                        <div class="m-2 rounded shadow bg-white">
                            <h4 class="border-bottom premium mb-0 text-white">User Experience</h4>
                            <p class="descrip">Connect your customers with a branded channel experience that captures the right data for your business.</p>
                            <div class="text-center pb-4">
                                <a href="">
                        <button class="btn btn-info">View</button>
                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-4">
                        <img class="services-img rounded-pill" src="{{ asset('images/dollar.jpg') }}">
                        <div class="m-2 rounded shadow bg-white">
                            <h4 class="border-bottom premium mb-0 text-white">Design</h4>
                            <p class="descrip">Connect your customers with a branded channel experience that captures the right data for your business.</p>
                            <div class="text-center pb-4">
                                <a href="">
                        <button class="btn btn-info">View</button>
                        </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio">
            <h3 class="text-uppercase text-center py-4 service-heading text-muted">Portfolio</h3>
            <div id="portfolio">
		        <div class="container-fluid">
		            <div class="row">
		                <div class="col portfolio-img"><a href="#"><img class="img-responsive" src="{{asset('images/website1.jpg')}}" alt=""></a></div>
		                <div class="col portfolio-img"><a href="#"><img class="img-responsive" src="{{asset('images/website2.jpg')}}" alt=""></a></div>
		                <div class="col portfolio-img"><a href="#"><img class="img-responsive" src="{{asset('images/website3.jpg')}}" alt=""></a></div>
		            </div>

		            <div class="row">
		                <div class="col portfolio-img"><a href="#"><img class="img-responsive" src="{{asset('images/website4.jpg')}}" alt=""></a></div>
		                <div class="col portfolio-img"><a href="#"><img class="img-responsive" src="{{asset('images/website5.jpg')}}" alt=""></a></div>
		                <div class="col portfolio-img"><a href="#"><img class="img-responsive" src="{{asset('images/website6.jpg')}}" alt=""></a></div>
		            </div>
		        </div>

		        <div class="container-fluid portfolio-footer">
		            <div class="row">
		                <div class="col-4">
		                    <div class="portfolio-description">
		                        <h1>WILD</h1>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus deleniti, distinctio laudantium neque odit recusandae!</p>
		                        <button>See All</button>
		                    </div>
		                </div>
		                <div class="col-6" style="height: 100%; text-align: end; margin-left: 10%;"><img style=" margin-top: -20%; height:80%; width:100%;" class="img-responsive" src="{{asset('images/portfolio-background.png')}}" alt=""></div>
		            </div>
		        </div>
		    </div>
		</div>

        <div class="pt-3 pb-3 bg-light technology-stack">
            <div class="container">
            	<h3 class="text-uppercase text-center py-4 service-heading text-muted">Technology Stack</h3>
				<p class="">Our team of passionate technology experts can create whatever you need, from mobile applications and responsive websites to cloud-based services. We are your technology partners in all phases of the development process, working with you to design and develop solutions that complement and enhance existing system architecture. We’re well versed in all the latest technologies and as technology advances and evolves, so do we. Here are a few things we’re using now: </p>
                
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
		            <ol class="carousel-indicators carousel-testimonial">
						{{-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li> --}}
					</ol> 
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                           	<div class="carousel-item-icon d-flex justify-content-between">
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/html.svg') }}">
                           			<h5 class="pt-2">HTML5</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/css.svg') }}">
                           			<h5 class="pt-2">CSS3</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/js.svg') }}">
                           			<h5 class="pt-2">JavaScript</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/bootstrap.svg') }}">
                           			<h5 class="pt-2">Bootstrap</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/react.svg') }}">
                           			<h5 class="pt-2">React</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/vue.svg') }}">
                           			<h5 class="pt-2">VueJs</h5>
                           		</div>
                            </div>
                        </div>

                        <div class="item carousel-item">
                           	<div class="carousel-item-icon d-flex justify-content-between">
                                <div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/angular.svg') }}">
                           			<h5 class="pt-2">AngularJs</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/laravel.svg') }}">
                           			<h5 class="pt-2">Laravel</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/php.svg') }}">
                           			<h5 class="pt-2">PHP</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/mysql.svg') }}">
                           			<h5 class="pt-2">MySQL</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/python.svg') }}">
                           			<h5 class="pt-2">Python</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/django.svg') }}">
                           			<h5 class="pt-2">Django</h5>
                           		</div>
                            </div>
                        </div>

                        <div class="item carousel-item">
                            <div class="carousel-item-icon d-flex justify-content-between">
                                <div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/node.png') }}">
                           			<h5 class="pt-2">NodeJs</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/java.svg') }}">
                           			<h5 class="pt-2">Java</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/android.svg') }}">
                           			<h5 class="pt-2">Android</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/ios.svg') }}">
                           			<h5 class="pt-2">IOS</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/photoshop.svg') }}">
                           			<h5 class="pt-2">Photoshop</h5>
                           		</div>
                           		<div class="col-md-2 text-center">
                           			<img src="{{ asset('images/stack/illustrator.svg') }}">
                           			<h5 class="pt-2">Illustrator</h5>
                           		</div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						{{-- <img src="{{ asset('/images/prev-arrow.png') }}" aira-hidden="true"> --}}
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						{{-- <img src="{{ asset('/images/next-arrow.png') }}"> --}}
						<span class="sr-only">Next</span>
					</a>
                </div>
            </div>
        </div>
        <div>
            <h3 class="text-uppercase text-center py-4 service-heading text-muted">Development Process</h3>
            <div class="container">
            </div>
        </div>
        <div>
            <h3 class="text-uppercase text-center py-4 service-heading text-muted">Our Client</h3>
            <div class="container">
            </div>
        </div>
        <div>
            <h3 class="text-uppercase text-center py-4 service-heading text-muted">What our client says</h3>
            <div class="container">
            </div>
        </div>
    </div>
</section>
@endsection
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
       	var elems = document.querySelectorAll('.carousel');
       	var instances = M.Carousel.init(elems, options);
       });
       
       // $(document).ready(function(){
       // 	$('.carousel').carousel();
       // });
</script>