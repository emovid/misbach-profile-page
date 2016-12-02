@extends('layout.main')

@section('nav')
<!-- nav -->

<nav role="header-nav" class="navy">

    <ul>

        <li class="nav-active"><a href="{{ url('/') }}" title="Work">Home</a></li>

        <li><a href="{{ url('/about') }}" title="About">About</a></li>

        <li><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>

    </ul>

</nav>

<!-- nav -->
@overwrite

@section('content')
 <main role="main-home-wrapper" class="container">

        	

            <div class="row">

            

            	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>Misbach</span> Imaduddin</h2>

                        </header>

                        <p>This is the profile page of Misbach Imaduddin Zuhdi, a person who have passion on everythings that he loves.</p>

                    </article>

                </section>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="{{ URL::asset('images/home-images/c1.jpg') }}" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h2><span>About</span> Me</h2>

							<p>How well do you know me?</p>

							<a href="{{ url('/about') }}">View more</a>

                        </figcaption>

                    </figure>

                </section>

                

                <div class="clearfix"></div>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<ul class="grid-lod effect-2" id="grid">




                        <li>

                            <figure class="effect-oscar">

                            <img src="{{ URL::asset('images/home-images/c5.jpg') }}" alt="" class="img-responsive"/>

                            <figcaption>

                                

                                    <h2>Work <span>Portofolio</span></h2>

                                    <p>What I have ever created</p>

                                    <a href="{{ url('/portofolio') }}">View more</a>

                                

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="{{ URL::asset('images/home-images/c6.jpg') }}" alt="" class="img-responsive"/>

                            <figcaption>

                                <h2><span>Books</span> that I love</h2>

                                <p>Books that have changed my perception on life</p>

                                <a href="{{ url('/book') }}">View more</a>

                            </figcaption>

                        </figure>

                        </li>

                    </ul>

                </section>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<ul class="grid-lod effect-2" id="grid">

                    	<li>

                        	<figure class="effect-oscar">

                            <img src="{{ URL::asset('images/home-images/c2_2.jpg') }}" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2><span>Work</span> Experience</h2>

                                    <p>Things that i have passionate with</p>

                                <a href="{{ url('/experience') }}">View more</a>

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                        	<figure class="effect-oscar">

                            <img src="{{ URL::asset('images/home-images/c3_2.jpg') }}" alt="" class="img-responsive"/>

                             <figcaption>

                                <h2><span>Volunteer</span> Events</h2>

                                <p>Opportunities and events that I enjoyed</p>

                                <a href="{{ url('/event') }}">View more</a>

                            </figcaption>

                        </figure>

                        </li>

                        <li>

                            <figure class="effect-oscar">

                            <img src="{{ URL::asset('images/home-images/c4_2.jpg') }}" alt="" class="img-responsive"/>

                            <figcaption>

                                

                                    <h2>List of <span>Competitions</span></h2>

                                    <p>Competitions that I have ever joined</p>

                                    <a href="{{ url('/competition') }}">View more</a>

                                

                            </figcaption>

                        </figure>

                        </li>

                    </ul>

                </section>

                <div class="clearfix"></div>

            </div>

        </main>
@endsection