<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'template_parts/header.php' ?>
     </head>
  <body>
    <nav class="navbar fixed-top navbar-toggleable-md other-navbar main-navbar px-0">
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
                        <li class="nav-item">
                            <a class="nav-link" href="FAQ.php">FAQS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid contact-portion">
        <div class="row mx-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-0">

                <div class="contact-main-container">
                    <div class="faq-main-heading">
                        <h3> GET IN TOUCH </h3>
                        <hr>
                    </div>


                    <div class="contact-form-box">
                        <div class="contact-form-container">
                            <form class="form-group contact-form">
                                <input type="text" class="form-control contact-form-input" placeholder="Name:*">
                                <input type="text" class="form-control contact-form-input" placeholder="Email:*">
                                <input type="text" class="form-control contact-form-input" placeholder="Phone">
                                <input type="text" class="form-control contact-form-input" placeholder="Location">
                                <textarea class="form-control contact-form-message" id="exampleTextarea" placeholder="Message:*" rows="5"></textarea>
                                <button class="form-control contact-form-button">Submit</button>
                            </form>  
                        </div>
        

                        <div class="contact-details-container">
                            <div class="contact-details-row">
                                <p class="mb-2">
                                    <span class="contact-details-span">
                                        <strong class="contact-details-heading">Contact:</strong>
                                        <span class="contact-detail-con"> +188-282-1904</span>
                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="contact-details-span">
                                        <strong class="contact-details-heading">Sales:</strong>
                                        <span class="contact-detail-con"> sales@sellyourrides.com</span>
                                    </span>
                                </p>
                                <p class="mb-2">
                                <strong class="contact-details-heading"> Michigan and surrounding states:</strong>
                                    <span class="contact-detail-con"> Michigan@sellyourrides.com</span>
                                </p>
                                <p class="mb-2">
                                <strong class="contact-details-heading">Tennessee and surrounding states:</strong>
                                    <span class="contact-detail-con"> Tennessee@sellyourrides.com</span>
                                </p>
                                <p class="mb-2">
                                <strong class="contact-details-heading">Partnering Opportunities:</strong>
                                    <span class="contact-detail-con"> partners@sellyourrides.com</span>
                                </p>
                            </div>
                            <div class="contact-map-row">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.174463662865!2d67.07256431458761!3d24.89202998403905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33edc8e0a1b45%3A0x95854329956118e7!2sAga+Khan+University+Hospital%2C+Pakistan!5e0!3m2!1sen!2s!4v1511949543043" width="100%" height="100%" frameBorder="0" allowFullScreen></iframe>
            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  

    <?php include 'template_parts/footer.php' ?>
    </body>