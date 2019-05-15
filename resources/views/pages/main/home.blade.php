@extends('layouts.mainpage')

@section('content')
    <header>
        @include('sections.main.nav')
    </header>
    <div id="main">
        @include('sections.main.carousel')
        <!--@ include('sections.main.services')-->
        <section class="banner parallax-window wow slideInRight" data-parallax="scroll" data-image-src="/assets/img/girl_on_bed.jpg">
            <div class="container">
                <div class="section-content">
                    <ul>
                        <li><span></span>% Privacy</li>
                        <li>Affordable pricing</li>
                        <li>Any citation style</li>
                        <li>No pre-written papers</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="time-management">
            <div class="container wow slideInLeft">
                <div class="section-content right-left">
                    <div class="left-content">
                        <img src="{{ URL::asset('assets/img/home-websites.png') }}">
                    </div>
                    <div class="right-content top-offset">
                        <h2>Helping you manage your time better.</h2>
                        <h3>More time preparing for exams rather than chasing assignment deadlines.</h3>
                        <p>When the end of the term approaches, it seems that so many deadlines are quickly closing in. There are exams to study for, assignments to complete, projects to finish and papers to write. That's the perfect time to be searching for the best writing agency online. A trustworthy writing service can make all the difference in the world.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="deadlines">
            <div class="container wow slideInRight">
                <div class="section-content left-right">
                    <div class="left-content top-offset">
                        <h2>Ability to meet tight deadlines.</h2>
                        <h3>Helping you submit all your assignments <strong title="Isn't this beautiful?">on time</strong> while you focus on other important aspects of your life.</h3>
                        <p>Our writing service is not sub-standard. We are equipped to meet even the tightest of deadlines. No more worrying that you don't have enough time left or that you won't get your paper handed in before the deadline. Give us a try; you'll be very glad you did!</p>
                    </div>
                    <div class="right-content">
                        <img src="{{ URL::asset('assets/img/home-ideas.png') }}">
                    </div>
                </div>
            </div>
        </section>
        
        <section id="proofreading">
            <div class="container wow slideInLeft">
                <div class="section-content right-left">
                    <div class="left-content">
                        <img src="{{ URL::asset('assets/img/home-websites.png') }}">
                    </div>
                    <div class="right-content top-offset">
                        <h2>Editing and proofreading.</h2>
                        <h3>...</h3>
                        <p>Sometimes all the words for your paper just flow out of your mind and into your fingers. You type quickly at your keyboard and there they are, your beautiful words right there on the screen. But you have no idea how to polish it up. You may be wishing there was a paper writing service that offered this type of writing service. Look no more! Here at RealSource.co.za we offer you an editing and proofreading option that you can't find anywhere else.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="writing">
            <div class="container wow slideInRight">
                <div class="section-content left-right">
                    <div class="left-content top-offset">
                        <h2>Efficient writing services</h2>
                        <h3>...</h3>
                        <p>We are convenient and efficient, in order to fill your needs no matter what your academic level is. We use email delivery for the quickest delivery possible. Your quality paper will be sent straight to your email account. It doesn't get any easier than that. Add to that our 24/7 customer support that is unsurpassed anywhere. We treat you like you are the most important person to us…because you are!</p>
                    </div>
                    <div class="right-content">
                        <img src="{{ URL::asset('assets/img/home-ideas.png') }}">
                    </div>
                </div>
            </div>
        </section>
        <section id="marketing">	
            <div class="container">
                <div class="section-content">
                    <div class="section-heading">
                        <h2>Wealthy Affiliate Powers Affiliate Marketers Worldwide.</h2>
                        <p>We don't just help your submit assignments, we assist you save time and focus on you and your mental health.</p>
                    </div>
                    
                    <div class="marketers-content">
                        <div class="marketers-info wow flipInX animated" data-wow-delay="0.4s">
                            <img class="marketers-info-img" src="{{ URL::asset('assets/img/home-numbers-years-in-business.png') }}">
                            <div class="marketers-info-number">
                                <span class="number">1</span>
                                <span class="number-txt">YEAR IN BUSINESS</span>
                            </div>
                        </div>
                        <div class="marketers-info wow flipInX animated" data-wow-delay="0.4s">
                            <img class="marketers-info-img" src="{{ URL::asset('assets/img/home-numbers-countries.png') }}">
                            <div class="marketers-info-number">
                                <span class="number">8</span>
                                <span class="number-txt">UNIVERSITIES</span>
                            </div>

                        </div>
                        <div class="marketers-info wow flipInX animated" data-wow-delay="0.4s">  
                            <img class="marketers-info-img" src="{{ URL::asset('assets/img/home-numbers-members.png') }}">
                            <div class="marketers-info-number">
                                <span class="number">200+</span>
                                <span class="number-txt">STUDENTS</span>
                            </div>
                        </div>
                        <div class="marketers-info wow flipInX animated" data-wow-delay="0.5s">
                            <img class="marketers-info-img" src="{{ URL::asset('assets/img/home-numbers-new-business-built-monthly.png') }}">
                            <div class="marketers-info-number">
                                <span class="number">230+</span>
                                <span class="number-txt">PAPERS COMPLETED</span>
                            </div>
                        </div>
                        <div class="marketers-info wow flipInX animated" data-wow-delay="0.6s">
                            <img class="marketers-info-img" src="{{ URL::asset('assets/img/home-numbers-expert-coaches.png') }}">
                            <div class="marketers-info-number">
                                <span class="number">80+</span>
                                <span class="number-txt">EXPERT WRITERS</span>
                            </div>
                        </div>
                        <div class="marketers-info wow flipInX animated" data-wow-delay="0.7s">
                            <img class="marketers-info-img" src="{{ URL::asset('assets/img/home-numbers-people-helped-day.png') }}">
                            <div class="marketers-info-number">
                                <span class="number">20+</span>
                                <span class="number-txt">PEOPLE HELPED DAILY</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        @include('sections.main.howitworks')
        @include('sections.main.offers')
        <section id="faq" class="questions-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center-content">
                        <div class="page-title text-center">
                            <h5 class="title">FAQ</h5>
                            <h3 class="dark-color">Frequently Asked Questions</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="toggole-boxs">
                            <h3>Faq first question goes here? </h3>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <h3>Faq second question goes here? </h3>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis placeat quae totam quasi sed exercitationem impedit, sit vitae possimus sapiente quo ad, voluptas inventore numquam iste suscipit debitis. Nam, neque?</p>
                            </div>
                            <h3>Faq third question goes here? </h3>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto temporibus repellat nisi deserunt debitis praesentium illo ipsa ducimus mollitia, tenetur eos, cupiditate voluptates ipsam ab magni eaque error eum libero!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="toggole-boxs">
                            <h3>Faq first question goes here? </h3>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <h3>Faq second question goes here? </h3>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis placeat quae totam quasi sed exercitationem impedit, sit vitae possimus sapiente quo ad, voluptas inventore numquam iste suscipit debitis. Nam, neque?</p>
                            </div>
                            <h3>Faq third question goes here? </h3>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto temporibus repellat nisi deserunt debitis praesentium illo ipsa ducimus mollitia, tenetur eos, cupiditate voluptates ipsam ab magni eaque error eum libero!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('sections.main.testimonials')
        <section id="plagiarism">
                <div class="container">
                    <div class="section-content">
                        <p><img src="{{ URL::asset('assets/img/home-zero-risk.png') }}"></p>
                        <h2>100% plagiarism free. Zero Risk.</h2>
                        <p class="risk-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus dicta odit modi odio repudiandae quibusdam fugit itaque porro ullam rerum iste excepturi, vitae earum consequuntur. Eaque hic reprehenderit labore nisi!</p>
                    </div>
                </div>
            </section>
        @include('sections.main.contacts')
        <section id="home-bottom">
            <div class="container">
                <div class="section-content">
                    <h2>What Are You Waiting For?</h2>
                    <h3>Try RealSource.co.za for <strong>Plagiarism Free</strong> wrork, No Risk.</h3>
                    <img class="home-cta-chat" src="{{ URL::asset('assets/img/home-cta-chat.png') }}">
                    <img class="home-cta-email" src="{{ URL::asset('assets/img/home-cta-email.png') }}">
                    <img class="home-cta-globe" src="{{ URL::asset('assets/img/home-cta-globe.png') }}">
                    <img class="home-cta-website" src="{{ URL::asset('assets/img/home-cta-website.png') }}">				
                    <div class="form-space">
                        <div class="input-group">
                            <input type="email" class="form-control get-started-email" placeholder="Enter your email address">
                            <span class="input-icon">Enter Email Address</span>
                            <span class="input-group-btn">
                                <button class="btn get-started-btn" type="button" data-toggle="modal" data-target="#join_signup_model" data-entrance="14">Get Started</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <!--ul class="payment-ss">
            <li><i class="fa fa-cc-visa" aria-hidden="true"></i></li>
            <li><i class="fa fa-cc-mastercard" aria-hidden="true"></i></li>
            <li><i class="fa fa-cc-paypal" aria-hidden="true"></i></li>
            <li><i class="fa fa-cc-discover" aria-hidden="true"></i></li>
            <li><i class="fa fa-cc-amex" aria-hidden="true"></i></li>
        </ul-->
        <!--div class="add-links">
            <a href="/blog/">Blog</a>
            <a href="/review.html">Review</a>
        </div-->
    
        <div class="footer-links-block">
            <a href="{{ route('manage.terms')}}">Terms &amp; Conditions</a>
            <a href="{{ route('manage.terms')}}#privacy-policy">Privacy Policy</a>
            <a href="{{ route('manage.terms')}}#money-back-guarantee">Money-Back Policy</a>
        </div>
    
        <p>&copy; 2019 — RealSource.co.za: Professional Writing &amp; Editing.
            <br> All Rights Reserved.</p>
            <p>By: <a href="">Nkosingiphile Sibandze</a></p>

            <!--6B98C015278C76F1E2DDFF3DEBBCF64BADE59584F413AD2CF295216A4BDEABA1-->
    </footer>
@endsection  