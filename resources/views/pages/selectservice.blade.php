@extends('layouts.theme')

@section('content')
<section class="py-5">
    <div class="section-title text-center_  ">
        <div class="row d-flex justify-content-center mt-100">
            <div class="col-md-6">
                <div class="bg-white py-5">
                    <button type="submit" class="btn btn-success btn-block text-uppercase form-control-lg">Back</button>
                    <div class="card-body_">
                         <div> 
                         <form action="{{route('becomeExxpert.businessgoal')}}" class="pl-5" >
                                <h3 class="card-title_"><strong>Select any other services you do.</strong></h3>
                                <p class="">You’ll show up in search results and get leads for all services you select.</p>
                              
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <div class="form-group">
                                <label><input type="checkbox" class="option-input checkbox" checked /> Would like to take dinner? </label>
                             </div>
                             <button type="submit" class="btn btn-success btn-block text-uppercase form-control-lg">NEXT</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    @endsection