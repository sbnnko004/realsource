@extends('layouts.mainpage')

@section('content')
    <header>
        @include('sections.main.ordering.nav')
    </header>
    <div class="container" id="ordering">
        <section>
            <div id="main-grid">
                <div class="main-bar  wow slideInLeft">
                    

                    <div class="progress_bar">
                        <ul class="steps">
                            @if($step==1)
                            <li class="current" step="1">
                            @else
                            <li class="complete" step="1">
                            @endif
                                <a>
                                    <span class="step-indicator">
                                        <span></span>
                                    </span>
                                    <span class="step-title">1. Project Details</span>
                                </a>
                            </li>
                            @if($step<2)
                            <li class="" step="2">
                            @elseif($step==2)
                            <li class="current" step="2">
                            @else
                            <li class="complete" step="2">
                            @endif
                                <a>
                                    <span class="step-indicator">
                                        <span></span>
                                    </span>
                                    <span class="step-title">2. Instructions</span>
                                </a>
                            </li>
                            
                            @if($step<3)
                            <li class="" step="3">
                            @elseif($step==3)
                            <li class="current" step="3">
                            @else
                            <li class="complete" step="3">
                            @endif
                            
                                <a>
                                    <span class="step-indicator">
                                        <span></span>
                                    </span>
                                    <span class="step-title">3. Summary &amp; Review</span>
                                </a>
                            </li>
                            <li class="" step="4">
                                <a>
                                    <span class="step-indicator">
                                        <span></span>
                                    </span>
                                    <span class="step-title">4. Checkout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-container">
                        @if($step==3)
                        <form id="step-form" action="https://{{$payfast->getHost()}}/eng/process" method="post">
                        @else
                        <form id="step-form">
                        @endif
                            @if($step==3)
                            <div class="form_grid fix-stage-3">
                            @else    
                            <div class="form_grid">
                            @endif
                                <div class="form_left" >
                                    @if($step==1)
                                        @include('sections.main.ordering.form_left_step1')
                                    @elseif($step==2)
                                        @include('sections.main.ordering.form_left_step2')
                                    @elseif($step==3)
                                        @include('sections.main.ordering.form_left_step3')
                                    @endif
                                
                                </div>
                                <div class="form_right" >
                                    @if($step==1)
                                        @include('sections.main.ordering.form_right_step1')
                                    @elseif($step==2)
                                        @include('sections.main.ordering.form_right_step2')
                                    @elseif($step==3)
                                        @include('sections.main.ordering.form_right_step3')
                                    @endif
                                    
                                </div>
                                
                            </div>
                            <div class="button-panel">
                                    
                                    @if($step==1)
                                        <div class="clearfix"></div>
                                        <div class="next-step">
                                            <button class="btn-step" id="submit_first" type="button">
                                                Go to Instructions
                                                <i class="i"></i>
                                                <span class="loading badge"><i class="fa fa-spinner fa-spin"></i></span>
                                            </button>
                                        </div>
                                    @elseif($step==2)
                                        <div class="back-step">
                                            <button class="btn-step back" id="submit_second" type="button">
                                                <i class="i"></i>
                                                <span class="loading badge"><i class="fa fa-spinner fa-spin"></i></span>
                                                Back to Project Details
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="next-step">
                                            <button class="btn-step" id="submit_second" type="button">
                                                Go to Summary &amp; Review
                                                <i class="i"></i>
                                                <span class="loading badge"><i class="fa fa-spinner fa-spin"></i></span>
                                            </button>
                                        </div>
                                    @elseif($step==3)
     {!!
                                            $payfast->paymentForm(false)
                                        !!}
                                   <div class="back-step">
                                            <button class="btn btn-step back" id="submit_second" type="button">
                                                <i class="i"></i>
                                                <span class="loading badge"><i class="fa fa-spinner fa-spin"></i></span>
                                                Back to Instructions
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="next-step">
                                            <button class="btn btn-step checkout" id="submit_third" type="button">
                                                Checkout
                                                <i class="i"></i>
                                                <span class="loading badge"><i class="fa fa-spinner fa-spin"></i></span>
                                            </button>
                                        </div>
                                    
                                    @endif
                                </div>

                            </form>
                    </div>
                    
                </div>
                <div class="side-bar wow slideInRight">
                    <img src="{{ asset('assets/img/secure-payments.png') }}" class="img">
                    <img src="{{ asset('assets/img/PayFast.png') }}" class="img">
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p>Copyright  2019 - realsource.co.za. All rights reserved.</p>
                    <p>&copy; <a href="">Nkosingiphile Sibandze</a></p>
    
                </div>
            </div>
        </div>
    </footer>
    
@endsection  