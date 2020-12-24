@extends('layouts.theme')

@section('content')
<section class="">
    <div class="section-title text-center ">

        <div class="container_" style="background-image: url('assets/images/home/bg4.jpg');background-repeat: no-repeat; padding:200px; background-size: cover;">


        
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                {{-- <img class="img-fluid" src="{{asset('assets/images/home/bg4.jpg')}}" alt='' /> --}}
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">

                
   <div class="bg-white">
    
  
    <div class="container py-5">
        <img src="{{asset('assets/images/exxpert-logo2.png')}}" alt="" srcset="">
        <h2><strong>Get new jobs.</strong></h2> 
       <p> <strong>  What is your line of work?</strong></p>
    
    <form class="p-5" action="{{route('becomeExxpert.progress')}}">
        <div class="form-group">
          
          <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Servies">
          
        </div>
        
        <div class="form-group">
         
          <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Location">
        </div>
        <h4>
            <strong>30,000+</strong> </h4>
        <p> leads on <strong>Exxpert</strong> a day</p>
        <button type="submit" class="btn btn-success btn-block text-uppercase form-control-lg">GET NEW JOBS</button>
      </form>
    </div>
    </div>
            </div>
        </div>
    </div>
    
    </div>

    <div class="bg-white p-2 text-center">
        <h3>Contact Us:<strong>0248907440 or we call you</strong></h3>
    </div>
    <div class="container py-5">
        <h2 class="text-center"><strong>Grow your business with Exxpert.</strong></h2>
    <div class="row">
    <div class="col-lg-4 col-md-4">
    <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-box-outline mdi-48px"></i></div>
    <h5 class="mt-3 mb-3">Create a free profile.</h5>
    <p>There's no fee to join. Build a winning profile by adding reviews, prices, and featured projects.</p>
    </div>
    <div class="col-lg-4 col-md-4">
    <div class="mt-4 mb-4"><i class="text-success mdi mdi-check-circle-outline mdi-48px"></i></div>
    <h5 class="mb-3">Tell us what jobs you want.</h5>
    <p>Decide when, where, and how you want to work and we'll send the the right customers to your business.</p>
    </div>
    <div class="col-lg-4 col-md-4">
    <div class="mt-4 mb-4"><i class="text-success mdi mdi-account-multiple-outline mdi-48px"></i></div>
    <h5 class="mt-3 mb-3">Watch as customers come to you.</h5>
    <p>If the customer thinks you're a great fit, they'll reach out. You only pay when a lead contacts you.</p>
    </div>
    </div>
    </div>

{{-- real jobs from --}}

<div>
<section class="py-5 bg-white">
    <div class="view_slider recommended">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <h3>See real jobs from Exxpert customers.</h3>
    <div class="view recent-slider recommended-slider">
    <div>
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('assets/images/list/v1.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <div class="d-flex align-items-center">
    <span class="seller-image">
    <img class="img-fluid" src="{{asset('assets/images/user/s1.png')}}" alt='' />
    </span>
    <span class="seller-name">
    <a href="profile.html">Marcin Kowalski</a>
    <span class="level hint--top level-one-seller">
    Level 1 Seller
    </span>
    </span>
     </div>
    <h3>I will create professional audio ads or radio commercials for your project</h3>
    <div class="content-info">
    <div class="rating-wrapper">
    <span class="gig-rating text-body-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
    </path>
    </svg>
    5.0
    <span>(7)</span>
    </span>
    </div>
    </div>
    <div class="footer">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <div class="price">
    <a href="#">
    Starting At <span> $1,205</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('assets/images/list/v2.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <div class="d-flex align-items-center">
    <span class="seller-image">
    <img class="img-fluid" src="{{asset('assets/images/user/s2.png')}}" alt='' />
    </span>
    <span class="seller-name">
    <a href="profile.html">Marcin Kowalski</a>
    <span class="level hint--top level-one-seller">
    Level 1 Seller
    </span>
    </span>
    </div>
    <h3>I will create professional audio ads or radio commercials for your project</h3>
    <div class="content-info">
    <div class="rating-wrapper">
    <span class="gig-rating text-body-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
    </path>
    </svg>
    5.0
    <span>(7)</span>
    </span>
    </div>
    </div>
    <div class="footer">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <div class="price">
    <a href="#">
    Starting At <span> $1,205</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('assets/images/list/v3.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <div class="d-flex align-items-center">
    <span class="seller-image">
    <img class="img-fluid" src="{{asset('assets/images/user/s3.png')}}" alt='' />
    </span>
    <span class="seller-name">
    <a href="profile.html">Marcin Kowalski</a>
    <span class="level hint--top level-one-seller">
    Level 1 Seller
    </span>
    </span>
    </div>
    <h3>I will create professional audio ads or radio commercials for your project</h3>
    <div class="content-info">
    <div class="rating-wrapper">
    <span class="gig-rating text-body-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
    </path>
    </svg>
    5.0
    <span>(7)</span>
    </span>
    </div>
    </div>
    <div class="footer">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <div class="price">
    <a href="#">
    Starting At <span> $1,205</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('assets/images/list/v4.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <div class="d-flex align-items-center">
    <span class="seller-image">
    <img class="img-fluid" src="{{asset('assets/images/user/s4.png')}}" alt='' />
    </span>
    <span class="seller-name">
    <a href="profile.html">Marcin Kowalski</a> 
    <span class="level hint--top level-one-seller">
    Level 1 Seller
    </span>
    </span>
    </div>
    <h3>I will create professional audio ads or radio commercials for your project</h3>
    <div class="content-info">
    <div class="rating-wrapper">
    <span class="gig-rating text-body-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
    </path>
    </svg>
    5.0
    <span>(7)</span>
    </span>
    </div>
    </div>
    <div class="footer">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <div class="price">
    <a href="#">
    Starting At <span> $1,205</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('assets/images/list/v5.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <div class="d-flex align-items-center">
    <span class="seller-image">
    <img class="img-fluid" src="{{asset('assets/images/user/s5.png')}}" alt='' />
    </span>
    <span class="seller-name">
    <a href="profile.html">Marcin Kowalski</a>
    <span class="level hint--top level-one-seller">
    Level 1 Seller
    </span>
    </span>
    </div>
    <h3>I will create professional audio ads or radio commercials for your project</h3>
    <div class="content-info">
    <div class="rating-wrapper">
    <span class="gig-rating text-body-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
    </path>
    </svg>
    5.0
     <span>(7)</span>
    </span>
    </div>
    </div>
    <div class="footer">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <div class="price">
    <a href="#">
    Starting At <span> $1,205</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('assets/images/list/v6.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <div class="d-flex align-items-center">
    <span class="seller-image">
    <img class="img-fluid" src="{{asset('assets/images/user/s6.png')}}" alt='' />
    </span>
    <span class="seller-name">
    <a href="profile.html">Marcin Kowalski</a>
    <span class="level hint--top level-one-seller">
    Level 1 Seller
    </span>
    </span>
    </div>
    <h3>I will create professional audio ads or radio commercials for your project</h3>
    <div class="content-info">
    <div class="rating-wrapper">
    <span class="gig-rating text-body-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
    <path fill="currentColor" d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
    </path>
    </svg>
    5.0
    <span>(7)</span>
    </span>
    </div>
    </div>
    <div class="footer">
    <i class="fa fa-heart" aria-hidden="true"></i>
    <div class="price">
    <a href="#">
    Starting At <span> $1,205</span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
</div>
    {{-- how our pricing work --}}


    <div class="container py-5">
        <h2 class="text-center"><strong>How our pricing works.</strong></h2>
    <div class="row">
    <div class="col-lg-6 col-md-6">
    <div class="mt-4 mb-4"> <p><i class="text-success mdi mdi-check-circle-outline mdi-48px"> </i><strong>It's completely free to create a profile with Exxpert.</strong></p></div>

    </div>
    <div class="col-lg-6 col-md-6">
    <div class="mt-4 mb-4">
        <p><i class="text-success mdi mdi-check-circle-outline mdi-48px"></i><strong>You only pay when an interested customer reaches out to you.</strong></p>
    </div>
    
   
    </div>
    
    </div>
    <div class="row">
    <div class="col-lg-6 col-md-6">
    <div class="mt-4 mb-4">
        <p><i class="text-success mdi mdi-check-circle-outline mdi-48px"></i><strong>There's no subscription fee.</strong></p>
    </div>
    
    </div>
    <div class="col-lg-6 col-md-6">
    <div class="mt-4 mb-4">
        <p> <i class="text-success mdi mdi-check-circle-outline mdi-48px"></i><strong>We have policies in place to make sure you get your money's worth.</strong></p>
    </div>
    
    
    </div>
    
    </div>

    </div>
    </section>
    @endsection