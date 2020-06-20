<?php require('./components/header.php');?>

      <!-- bradcam_area  -->
      <div class="bradcam_area bradcam_bg_5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Register Now</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    
    <!-- apply_form_area -->
    <div class="apply_form_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="#" class="apply_form" action="regform_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="apply_info_text text-center">
                                    <h4>STARUP 9JA EMERGENCE CHALLENGE</h4>
                                    <p>Please input the correct informations bellow.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <input type="text" name="fname" id="fname" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <input type="text" name="lname" id="lname" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <input type="tel" name="phone" id="phone" placeholder="Phone no.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <select class="wide" name="state" id="state">
                                    <option data-display="State Of Origin">State Of Origin</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Abuja">FCT - Abuja</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <input type="text" name="address" id="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <input type="text" name="dob" id="datepicker" placeholder="Date Of Birth">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_field">
                                    <select class="wide" name="agecat" id="agecat">
                                        <option data-display="Age Category">--Select Age Category--</option>
                                        <option value="1">4-9yrs <!--₦1,000--></option>
                                        <option value="2">10-15yrs <!--₦2,000--></option>
                                        <option value="3">16-21yrs <!--₦3,000--></option>
                                        <option value="4">22-28yrs <!--₦5,000--></option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_field">
                                    <select class="wide" name="category" id="category">
                                        <option data-display="Performance">--Select Performance Category--</option>
                                        <option value="1">Music</option>
                                        <option value="2">Dance</option>
                                        <option value="3">Comedy</option>
                                        <option value="4">Poetry</option>
                                        <option value="4">Novelty Act</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pay_text">
                                    <p>You have to pay: <span>Free</span></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit_btn">
                                    <button class="boxed-btn3" type="submit">Register Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ apply_form_area -->

<?php require('./components/testimonials.php');?>

<?php require('./components/logoslide.php');?>

<?php require('./components/footer.php');?>