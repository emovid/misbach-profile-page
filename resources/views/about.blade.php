@extends('layout.main')

@section('nav')
<!-- nav -->

<nav role="header-nav" class="navy">

    <ul>

        <li><a href="{{ url('/') }}" title="Work">Home</a></li>

        <li class="nav-active"><a href="{{ url('/about') }}" title="About">About</a></li>

        <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>

    </ul>

</nav>

<!-- nav -->
@overwrite

@section('content')
        <main role="main-inner-wrapper" class="container">

        	

            <div class="row">

            

            	<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>About Me</span> How well do you know me?</h2>

                        </header>

                        <p>This is the profile page of Misbach Imaduddin Zuhdi, a person who have passion on everythings that he love.</p>

                    </article>

                </section>

                



                

                <div class="clearfix"></div>

                

                <!-- thumbnails -->

                	<div class="thumbnails-pan">

                    	<section class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ">

                        	<figure>

                            	<img src="images/about-images/about-image-1.jpg" class="img-responsive"/>

                            	<figcaption>

                                	<h3>John Doe</h3>

                                    <h5>The designer</h5>

                                </figcaption>

                            </figure>

                        </section>

                        <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                            <article class="about-content">

                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc, fiant sollemnes in futurum.</p>

                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consueum formas humanitatis per seacula quarta deciEodem modo tythepi, qui nunc, fiant sollemnes in futurum.</p>

                            </article>

                        </section>

                    </div>

                <!-- thumbnails -->

                

                

            </div>

        </main>
@endsection