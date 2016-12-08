@extends('layout.main')

@section('nav')
<!-- nav -->

<nav role="header-nav" class="navy">

    <ul>

        <li><a href="{{ url('/') }}" title="Work">Home</a></li>

        <li><a href="{{ url('/about') }}" title="About">About</a></li>

        <li class="nav-active"><a href="{{ url('/contact') }}" title="Contact">Contact</a></li>

    </ul>

</nav>

<!-- nav -->
@overwrite

@section('content')
<main role="main-inner-wrapper" class="container">



    <div class="row">



        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">

            <article role="pge-title-content" class="contact-header">

                <header>

                    <h2><span>Hello!</span> I love to hear you.</h2>

                </header>

                <p><a href="mailto:contact@misbach.me"><i class="fa fa-envelope" aria-hidden="true"></i> contact@misbach.me</a></p>

            </article>

        </div>

        <!-- map -->

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

                <div class="contat-from-wrapper">

              <div id="message"></div>

                        <form method="POST" action="https://formspree.io/contact@misbach.me" name="cform" id="cform">

                    <div class="row">

                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

                        <input  name="name" id="name" type="text" placeholder="Whats your name">

                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

                        <input  name="_replyto" id="email" type="email"  placeholder="Whats your email">

                        </div>

                    </div>

                    <div class="clearfix"></div>

                    <textarea name="comments" id="comments" cols="" rows="" placeholder="Whats in your mind"></textarea>

                    <div class="clearfix"></div>

                    <input type="hidden" name="_next" value="{{ url('/') }}" />

                    <input name="" type="submit" value="Send email">

                    <div id="simple-msg"></div>

                </form>

       </div>

       <!-- contat-from-wrapper -->

        </div>


        <div class="clearfix"></div>



       <!-- contat-from-wrapper -->

       





    </div>

</main>
@endsection

@section('body.script')
<script src="{{ URL::asset('js/jquery.contact.js') }}" type="text/javascript"></script>
@endsection
