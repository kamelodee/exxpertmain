@extends('layouts.theme')

@section('content')
<section class="py-5 progress_container" style="background-image: url('assets/images/home/bg3.jpg');background-repeat: no-repeat; padding:50px; background-size: cover;">
    <div class="section-title text-center  ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-8 col-lg-8 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0  pb-0  mb-3">
                       
                        <form id="msform" class="p-5">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Image</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div> 
                                    <h4 class="card-title_"><strong>Select any other services you do.</strong></h4>
                                            <p class="">You’ll show up in search results and get leads for all services you select.</p>
                              
                                    <div class="form-group">
                                         <input type="checkbox" name="cc" id="c2"> <label for="c2">Would like to take dinner?</label>
                                    </div>
                                    <div class="form-group">
                                         <input type="checkbox" name="cc" id="c1"> <label for="c1">Would like to take dinner?</label>
                                    </div>
                                    <div class="form-group">
                                         <input type="checkbox" name="cc" id="c3"> <label for="c3">Would like to take dinner?</label>
                                    </div>
                                    <div class="form-group">
                                         <input type="checkbox" name="cc" id="c4"> <label for="c4">Would like to take dinner?</label>
                                    </div>
                                    <div class="form-group">
                                         <input type="checkbox" name="cc" id="c5"> <label for="c5">Would like to take dinner?</label>
                                    </div>
                                    <div class="form-group">
                                         <input type="checkbox" name="cc" id="c6"> <label for="c6">Would like to take dinner?</label>
                                    </div>
                                    
                                    
                                    
                    
                                    
                                </div> <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>

                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div> 
                                    <h3><strong>Tell us a bit about your self</strong></h3>
                                    <p>Pleasee answer two quick questions to help us understand your business needs</p>
                                    <p><strong>How much do you spend each month on online marketing?</strong></p>
                                    <input type="radio" name="spendingonline" id="value-1">
                                     <label class="fieldlabels" for="value-1">I don't currently spend on online marketing</label> 
                                    <input type="radio" name="spendingonline" id="value-2">
                                     <label class="fieldlabels" for="value-2">GHC5 to GHC100</label> 
                                    <input type="radio" name="spendingonline" id="value-3">
                                     <label class="fieldlabels" for="value-3">GHC100 to GHC200</label> 
                                    <input type="radio" name="spendingonline" id="value-4">
                                     <label class="fieldlabels" for="value-4">GHC200 and above</label> 

                                     <p><strong>What is your main business goal?</strong></p>
                                    <input type="radio" name="businessgoal" id="value-5">
                                     <label class="fieldlabels" for="value-5">Scale and grow my business</label> 
                                    <input type="radio" name="businessgoal" id="value-6">
                                     <label class="fieldlabels" for="value-6">Build up a side business</label> 
                                    <input type="radio" name="businessgoal" id="value-7">
                                     <label class="fieldlabels" for="value-7">Maintain the current size of my business</label> 
                                    <input type="radio" name="businessgoal" id="value-8">
                                     <label class="fieldlabels" for="value-8">Other</label> 
                                                                   
                                </div> <input type="button" name="next" class="next action-button" value="Next" /> 
                                
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Image Upload:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                                </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                            <p>Your profile is free ,but it takes time to make it greate</p>
                                            <p>it is worth it ,this is how you get hired</p>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>Build a winning profile</strong></h2> <br>
                                   
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="submit">
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @endsection