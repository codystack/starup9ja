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
						<div class="contact_form_title">Fill thr form below to register.</div>
						<form action="#" class="contact_form" id="contact_form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputFirstname">First name</label>
                            <input type="text" class="form-control contact_input" id="inputFirstname" placeholder="David">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputlastname">Last name</label>
                            <input type="text" class="form-control contact_input" id="inputLastname" placeholder="John">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control contact_input" id="inputEmail" placeholder="youremail@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPhone">Phone number</label>
                            <input type="tel" class="form-control contact_input" id="inputTel" placeholder="08012345678">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputDob">Date of birth</label>
                            <input type="date" class="form-control contact_input" id="inputDob">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control contact_input" id="inputAddress" placeholder="88 Woji road, GRA Phase II">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control contact_input">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control contact_input" id="inputCity" placeholder="Port Harcourt">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputZip">Attach photograph</label>
                            <input type="file" class="form-control-file contact_input" id="inputPicture">
                            </div>
                        </div>
                        <button type="submit" class="button contact_button"><span>SUBMIT</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php require_once("./components/footer.php");?>