<?php require('./components/header.php');?>

      <!-- bradcam_area  -->
      <div class="bradcam_area bradcam_bg_4">
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
                                    <h4>DREAMERS GANG REALITY TALENT CONTEST REGISTRATION</h4>
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
                                        <option data-display="State Of Origin">--State Of Origin--</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="5">Bauchi</option>
                                        <option value="6">Bayelsa</option>
                                        <option value="7">Benue</option>
                                        <option value="8">Borno</option>
                                        <option value="9">Cross River</option>
                                        <option value="10">Delta</option>
                                        <option value="11">Ebonyi</option>
                                        <option value="12">Edo</option>
                                        <option value="13">Ekiti</option>
                                        <option value="14">Enugu</option>
                                        <option value="15">FCT - Abuja</option>
                                        <option value="16">Gombe</option>
                                        <option value="17">Imo</option>
                                        <option value="18">Jigawa</option>
                                        <option value="19">Kaduna</option>
                                        <option value="20">Kano</option>
                                        <option value="21">Katsina</option>
                                        <option value="22">Kebbi</option>
                                        <option value="23">Kogi</option>
                                        <option value="24">Kwara</option>
                                        <option value="25">Lagos</option>
                                        <option value="26">Nasarawa</option>
                                        <option value="27">Niger</option>
                                        <option value="28">Ogun</option>
                                        <option value="29">Ondo</option>
                                        <option value="30">Osun</option>
                                        <option value="31">Oyo</option>
                                        <option value="32">Plateau</option>
                                        <option value="33">Rivers</option>
                                        <option value="34">Sokoto</option>
                                        <option value="35">Taraba</option>
                                        <option value="36">Yobe</option>
                                        <option value="37">Zamfara</option>
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
                                        <option value="1">4-9yrs ₦1,000</option>
                                        <option value="2">10-15yrs ₦2,000</option>
                                        <option value="3">16-21yrs ₦3,000</option>
                                        <option value="4">22-28yrs ₦5,000</option>
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
                                    <p>You have to pay: <span>₦0</span></p>
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