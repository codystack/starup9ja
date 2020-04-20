<?php require("./components/header1.php");?>

		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="current_page">Register</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

		<div class="container">
			<div class="row">
				<div class="col-lg">
					<div class="contact_form_container">
						<div class="contact_form_title">Fill the form below to register.</div>
						<form action="#" class="contact_form" id="contact_form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputFirstname">First name</label>
                            <input type="text" class="form-control" id="inputFirstname" placeholder="David">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputlastname">Last name</label>
                            <input type="text" class="form-control" id="inputLastname" placeholder="John">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="youremail@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPhone">Phone number</label>
                            <input type="tel" class="form-control" id="inputTel" placeholder="08012345678">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputDob">Date of birth</label>
                            <input type="date" class="form-control" id="inputDob">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="88 Woji road, GRA Phase II">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Abia</option>
                                <option>Adamawa</option>
                                <option>Akwa Ibom</option>
                                <option>Anambra</option>
                                <option>Bauchi</option>
                                <option>Bayelsa</option>
                                <option>Benue</option>
                                <option>Borno</option>
                                <option>Cross River</option>
                                <option>Delta</option>
                                <option>Ebonyi</option>
                                <option>Edo</option>
                                <option>Ekiti</option>
                                <option>Enugu</option>
                                <option>FCT - Abuja</option>
                                <option>Gombe</option>
                                <option>Imo</option>
                                <option>Jigawa</option>
                                <option>Kaduna</option>
                                <option>Kano</option>
                                <option>Katsina</option>
                                <option>Kebbi</option>
                                <option>Kogi</option>
                                <option>Kwara</option>
                                <option>Lagos</option>
                                <option>Nasarawa</option>
                                <option>Niger</option>
                                <option>Ogun</option>
                                <option>Ondo</option>
                                <option>Osun</option>
                                <option>Oyo</option>
                                <option>Plateau</option>
                                <option>Rivers</option>
                                <option>Sokoto</option>
                                <option>Taraba</option>
                                <option>Yobe</option>
                                <option>Zamfara</option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Port Harcourt">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputZip">Attach photograph</label>
                            <input type="file" class="form-control-file" id="inputPicture">
                            </div>
                        </div>
                        <button type="submit" class="button contact_button"><span>SUBMIT</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php require_once("./components/footer.php");?>