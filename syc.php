<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'template_parts/header.php' ?>
    </head>
  <body>

    <nav class="navbar fixed-top navbar-toggleable-md main-navbar other-navbar px-0">
        <div class="container navbar-margin">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="dist/img/logo.png" alt=""></a>

            <div class="collapse navbar-collapse navbar-list-margin" id="navbarSupportedContent">
                <div class="col-xl-11 px-0">
                    <ul class="navbar-nav mr-auto justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="syc.php">SELL YOUR CAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="FAQ.php">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid form-portion">
        <div class="row mx-0">
            <div class="col-xl-12 px-0">
                <div class="form-section">
                    <div class="form-first-row">
                        <h1 class="form-heading">FILL THE FORM</h1>
                        <hr>
                        <h6 class="form-second-heading">The fields with <span>*</span> are required fields, while filling out</h6>
                    </div>

                    <div class="form-second-row">
                        <form action="" id="msform">

                            <ul id="progressbar">
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                                <li></li>                                
                            </ul>

                        
                            <fieldset class="text-center mt-4">
                                <h6 class="form-note">The more information you provide, the better your qoute will be</h6>
                                
                                <div class="form-group row justify-content-center mb-5">
                                    <label class="col-12 col-form-label form-label-color">VIN<span>*</span></label>
                                    <div class="col-6">
                                        <input class="form-control form-input-color" required type="text">
                                    </div>
                                </div>

                                <input type="button" name="next" class="next btn btn-sm form-btn-next action-button" value="Next" />
                                
                            </fieldset>

                            <fieldset>
                                <div class="form-group mb-0">
                                    <label for="exampleInputEmail1" class="form-label-color">Model<span>*</span></label>
                                    <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                </div>

                                <div class="form-group mb-0">
                                    <label for="exampleTextarea" class="form-label-color">Make<span>*</span></label>
                                    <textarea class="form-control form-input-text-area" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Variant</label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Engine type</label>
                                            <select class="form-control form-input-color" id="exampleSelect1">
                                                <option>v10</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Trim</label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Drivetrain</label>
                                            <select class="form-control form-input-color" id="exampleSelect1">
                                                <option>4-Wheel Drive</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Fuel Type</label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Transmission</label>
                                            <select class="form-control form-input-color" id="exampleSelect1">
                                                <option>Automatic</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Mileage<span>*</span></label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Color<span>*</span></label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label for="lgFormGroupInput" class="col-sm-12 col-form-label form-label-color pb-0">Exterior <span>*</span></label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label custom-checkbox form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Standard
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label custom-checkbox form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Customize
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea" class="form-label-color">Please Explan</label>
                                    <textarea class="form-control form-input-text-area" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="lgFormGroupInput" class="col-sm-12 col-form-label form-label-color pb-0">Seats <span>*</span></label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label custom-checkbox form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Standard
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label custom-checkbox form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Power Seat
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label custom-checkbox form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Leather
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label custom-checkbox form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Other
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="exampleTextarea" class="form-label-color">Please Explan</label>
                                    <textarea class="form-control form-input-text-area" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="inputEmail3" class="col-sm-12 col-form-label form-label-color pb-0">Features</label>
                                    <div class="col-sm-12">
                                        <p class="feature-input">
                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Air Conditioning
                                                <span class="checkmark"></span>
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Sliding rear window
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power Sliding rear window
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power windows
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power door locks
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Cruise control
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power steering
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Tilt Wheel
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Sun Roof
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Moon Roof
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> ABS
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Parking sensor
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Air Bags
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> AM/FM Stereo
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> CD/MP
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> DVD-System
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Video System
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Convertible
                                                <span class="checkmark"></span>                                                
                                            </label>

                                            <label class="form-check-label form-label-color custom-checkbox">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> More Features
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="modification" class="col-sm-12 col-form-label form-label-color pb-0 pr-0">Any Modifications on the exterior or interior? <span>*</span></label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" checked name="modification" id="inlineRadio1" value="option1"> Yes
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" name="modification" id="inlineRadio2" value="option2"> No
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="exampleTextarea" class="form-label-color">Please Explain</label>
                                    <textarea class="form-control form-input-text-area" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-xl-4 col-lg-4 col-md-4 px-0">
                                        <label for="owner" class="col-sm-12 col-form-label form-label-color pb-0">Are you the orignal owner?<span>*</span></label>
                                        <div class="col-sm-12 pr-0">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="owner" id="inlineRadio1" value="option1"> Yes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="owner" id="inlineRadio2" value="option2"> No
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 px-0">
                                        <label for="odors" class="col-sm-12 col-form-label form-label-color pb-0 pr-0">Any lingering odors on the inside?<span>*</span></label>
                                        <div class="col-sm-12 pr-0">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="odors" id="inlineRadio1" value="option1"> Yes
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="odors" id="inlineRadio2" value="option2"> No
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 px-0">
                                        <label for="keys" class="col-sm-12 col-form-label form-label-color pb-0 pr-0">Are there two sets of keys?<span>*</span></label>
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="keys" id="inlineRadio1" value="option1"> Yes
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="keys" id="inlineRadio2" value="option2"> No
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-xl-4 col-lg-4 col-md-4 px-0">
                                        <label for="condition" class="col-sm-12 col-form-label form-label-color pb-0">The condition<span>*</span></label>
                                        <div class="col-sm-12 pr-0">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="condition" id="inlineRadio1" value="option1"> Fair
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="condition" id="inlineRadio2" value="option2"> Good
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="condition" id="inlineRadio2" value="option2"> Great
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-8 col-lg-8 col-md-8 px-0">
                                        <label for="status" class="col-sm-12 col-form-label form-label-color pb-0">Car status</label>
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="status" id="inlineRadio1" value="option1"> All paid
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="option2"> Bank financed
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="option2"> Leased
                                                    <span class="checkmark"></span>                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-xl-4 col-lg-4 col-md-4 px-0">
                                        <label for="title" class="col-sm-12 col-form-label form-label-color pb-0">Do you have the title<span>*</span></label>
                                        <div class="col-sm-12">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="title" id="inlineRadio1" value="option1"> Yes
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="title" id="inlineRadio2" value="option2"> Lost
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-8 col-lg-8 col-md-8 px-0">
                                        <label for="mechanical" class="col-sm-12 col-form-label form-label-color pb-0">Mechanical Condition<span>*</span></label>
                                        <div class="col-sm-12 pr-0">
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="mechanical" id="inlineRadio1" value="option1"> Well-maintained
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" name="mechanical" id="inlineRadio2" value="option2"> Minor issues
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline mobile-checkbox-margin">
                                                <label class="form-check-label form-label-color custom-radio-box">
                                                    <input class="form-check-input" type="radio" checked name="mechanical" id="inlineRadio2" value="option2"> Major issues
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <small id="emailHelp" class="form-noted form-text text-danger">We do not buy anything with major issues</small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-12">
                                        <label for="ex-condition" class="form-label-color pb-0">External condition<span>*</span></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color pb-0 custom-radio-box">
                                                <input class="form-check-input" type="radio" name="ex-condition" id="inlineRadio1" value="option1"> Look like new
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color pb-0 custom-radio-box">
                                                <input class="form-check-input" type="radio" name="ex-condition" id="inlineRadio2" value="option2"> Has minor scuffs
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color pb-0 custom-radio-box">
                                                <input class="form-check-input" type="radio" name="ex-condition" id="inlineRadio2" value="option2"> Unrepaired Accident Damage
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color pb-0 custom-radio-box">
                                                <input class="form-check-input" type="radio" checked name="ex-condition" id="inlineRadio2" value="option2"> major Damage
                                                <span class="checkmark"></span>                                                
                                            </label>
                                        </div>
                                        <small id="emailHelp" class="form-noted form-text text-danger">We do not buy anything with major Damage.</small>                                    
                                        
                                    </div>
                                </div>
                                <hr class="my-5">

                                <input type="button" name="previous" class="previous action-button btn-sm btn form-btn-back" value="BACK" />
                                <input type="button" name="next" class="next action-button btn btn-sm form-btn-next pull-right" value="Next" />
                                
                            </fieldset>

                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="exampleInputFile" class="form-label-color pb-0">Attach Picture</label>
                                    </div>
                                    <div class="col-12">
                                        <input id="uploadFile" class="form-input-image" placeholder="Choose File" disabled="disabled" />
                                        <div class="fileupload btn btn-sm form-input-file-btn">
                                            <span>BROWSE IMAGE</span>
                                            <input type="file" multiple class="upload form-control-file form-input-color"  id="uploadBtn" aria-describedby="fileHelp">
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div class="form-group row mb-2">
                                    <label for="refer" class="col-sm-12 col-form-label form-label-color pb-0 pr-0">Has anyone refer to you us?</label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" checked name="refer" id="inlineRadio1" value="option1"> Yes
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" name="refer" id="inlineRadio2" value="option2"> No
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Name</label>
                                            <input type="text" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Contact number</label>
                                            <input type="text" class="form-control form-input-color" id="exampleInputEmail1">                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="exampleInputEmail1" class="form-label-color">Contact information</label>
                                    <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                </div>

                                <hr class="my-5">

                                <input type="button" name="previous" class="previous action-button btn-sm btn form-btn-back" value="BACK" />
                                <input type="button" name="next" class="next action-button btn btn-sm form-btn-next pull-right" value="Next" />
                                


                            </fieldset>

                            <fieldset>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">First Name <span>*</span></label>
                                            <input type="text" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Last Name <span>*</span></label>
                                            <input type="text" class="form-control form-input-color" id="exampleInputEmail1">                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Email <span>*</span></label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Phone <span>*</span></label>
                                            <input type="text" class="form-control form-input-color" id="exampleInputEmail1">                                            
                                        </div>
                                    </div>
                                </div>
               
                                <div class="form-group row mb-2">
                                    <label for="time" class="col-sm-12 col-form-label form-label-color pb-0 pr-0">Preferred time to call</label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" checked name="time" id="inlineRadio1" value="option1"> Any Time
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" name="time" id="inlineRadio2" value="option2"> Morning
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" checked name="time" id="inlineRadio1" value="option3"> Afternoon
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline mobile-checkbox-margin">
                                            <label class="form-check-label form-label-color custom-radio-box">
                                                <input class="form-check-input" type="radio" name="time" id="inlineRadio2" value="option4"> Evening
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-5">

                                <input type="button" name="previous" class="previous action-button btn-sm btn form-btn-back" value="BACK" />
                                <input type="submit" name="submit" class="submit action-button btn btn-sm form-btn-next pull-right" value="SUBMIT" />
                                
                            </fieldset>
                        
                        
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <?php include 'template_parts/footer.php' ?>

    </body>
</html>