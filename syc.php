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
                        <li class="nav-item">
                            <a class="nav-link" href="syc.php">SELL YOUR CAR</a>
                        </li>
                        <li class="nav-item active">
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
                                <li class="active">Account Setup</li>
                                <li>Social Profiles</li>
                                <li>Personal Details</li>
                                <li>Personal Details</li>                                
                            </ul>

                        
                            <!-- <fieldset class="text-center mt-4">
                                <h6 class="form-note">The more information you provide, the better your qoute will be</h6>
                                
                                <div class="form-group row justify-content-center">
                                    <label class="col-12 col-form-label form-label-color">VIN<span>*</span></label>
                                    <div class="col-6">
                                        <input class="form-control form-input-color" type="text">
                                    </div>
                                </div>

                                <input type="button" name="next" class="next btn btn-sm form-btn-next action-button" value="Next" />
                                
                            </fieldset> -->

                            <fieldset>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label-color">Model<span>*</span></label>
                                    <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea" class="form-label-color">Make<span>*</span></label>
                                    <textarea class="form-control form-input-color" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Variant</label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-6">
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Trim</label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-6">
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Fuel Type</label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-6">
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
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Mileage<span>*</span></label>
                                            <input type="email" class="form-control form-input-color" id="exampleInputEmail1">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleTextarea" class="form-label-color">Color<span>*</span></label>
                                            <select class="form-control form-input-color" id="exampleSelect1">
                                                <option></option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label for="lgFormGroupInput" class="col-sm-12 col-form-label form-label-color">Exterior <span>*</span></label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Standard
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Customize
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea" class="form-label-color">Please Explan</label>
                                    <textarea class="form-control form-input-color" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row mb-0">
                                    <label for="lgFormGroupInput" class="col-sm-12 col-form-label form-label-color">Seats <span>*</span></label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Standard
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Power Seat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Leather
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Other
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <label for="exampleTextarea" class="form-label-color">Please Explan</label>
                                    <textarea class="form-control form-input-color" id="exampleTextarea" rows="5"></textarea>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-12 col-form-label">Features</label>
                                    <div class="col-sm-12">
                                        <p class="feature-input">
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Air Conditioning
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Sliding rear window
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power Sliding rear window
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power windows
                                            </label>

                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power door locks
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Cruise control
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Power steering
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Tilt Wheel
                                            </label>

                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Sun Roof
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Moon Roof
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> ABS
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Parking sensor
                                            </label>

                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Air Bags
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> AM/FM Stereo
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> CD/MP
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> DVD-System
                                            </label>

                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Video System
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Convertible
                                            </label>
                                            <label class="form-check-label form-label-color">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> More Features
                                            </label>
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <label for="lgFormGroupInput" class="col-sm-12 col-form-label form-label-color">Seats <span>*</span></label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox1" value="option1"> Standard
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Power Seat
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Leather
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input form-input-type" type="checkbox" id="inlineCheckbox2" value="option2"> Other
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                
                            </fieldset>

                            <!-- <fieldset>
                                <h2 class="fs-title">Personal Details</h2>
                                <h3 class="fs-subtitle">We will never sell it</h3>
                                <input type="text" name="fname" placeholder="First Name" />
                                <input type="text" name="lname" placeholder="Last Name" />
                                <input type="text" name="phone" placeholder="Phone" />
                                <textarea name="address" placeholder="Address"></textarea>
                                <input type="button" name="previous" class="previous action-button" value="Previous" />
                                <input type="submit" name="submit" class="submit action-button" value="Submit" />
                            </fieldset> -->
                        
                        
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <?php include 'template_parts/footer.php' ?>

    </body>
</html>