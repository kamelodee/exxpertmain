@extends('layouts.theme')

@section('content')
<section class="py-5 container">
    <div class="section-title text-center  ">
        <div class="row d-flex justify-content-center mt-100">
            <div class="col-md-6">
                <h3><strong>Tell us a bit about your self</strong></h3>
                <p>Pleasee answer two quick questions to help us understand your business needs</p>
            <form action="{{route('becomeExxpert.progress')}}">
    <div class="wrapper bg-white py-5">
        <p><strong>How much do you spend each month on online marketing?</strong></p>
        <div class="box"> <input type="radio" name="spendingonline" id="value-1">
             <input type="radio" name="spendingonline" id="value-2"> 
             <input type="radio" name="spendingonline" id="value-3">
              <input type="radio" name="spendingonline" id="value-4">
               <label for="value-1" class="value-1">
            <div class="select-dots"></div>
                <div class="text">I don't currently spend on online marketing </div>
            </label> <label for="value-2" class="value-2">
                <div class="select-dots"></div>
                <div class="text">GHC 5 to GhC 100</div>
            </label> <label for="value-3" class="value-3">
                <div class="select-dots"></div>
                <div class="text">GHC 100 to GHC 200</div>
            </label> <label for="value-4" class="value-4">
                <div class="select-dots"></div>
                <div class="text">GHC 200 to 500</div>
            </label> </div>
    </div>
    <div class="wrapper bg-white">
        <p><strong>What is your main business goal?</strong></p>
        <div class="box">
             <input type="radio" name="businessgoal" id="value-5">
              <input type="radio" name="businessgoal" id="value-6"> 
            <input type="radio" name="businessgoal" id="value-7"> 
            <input type="radio" name="businessgoal" id="value-8">
             <label for="value-5" class="value-5">
            <div class="select-dots"></div>
                <div class="text">Grow and scale my business</div>
            </label> <label for="value-6" class="value-6">
                <div class="select-dots"></div>
                <div class="text">Build up a side business</div>
            </label> <label for="value-7" class="value-7">
                <div class="select-dots"></div>
                <div class="text">Maintain the current size of my business</div>
            </label> <label for="value-8" class="value-8">
                <div class="select-dots"></div>
                <div class="text">Other</div>
            </label> 
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-block text-uppercase form-control-lg">Next</button>
</form>
    </div>
    </div>
    </div>
    </section>
    @endsection