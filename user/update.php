<?php 
	
	include 'include/header.php';

	include 'include/sidebar.php';

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	


						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" required name="name" class="form-control" value="">
							</div>
							<div class="form-group">
					              <label for="name">Blood Group</label><br>
					              <select class="form-control demo-default" required id="blood_group" name="blood_group" required>
					                <option value=""> </option>
					                <option value="A+">A+</option>
					                <option value="A-">A-</option>
					                <option value="B+">B+</option>
					                <option value="B-">B-</option>
					                <option value="O+">O+</option>
					                <option value="O-">O+</option>
					                <option value="AB+">AB+</option>
					                <option value="AB-">AB-</option>
					              </select>
					        </div><!--End form-group-->
							<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		<select name="gender" id="gender" class="form-control" required>
				              			<option value=""></option>
				              			<option value="Male">Male</option>
				              			<option value="Fe-male">Fe-male</option>
				              		</select>
				    		</div><!--gender-->
				    		<div class="form-group">
				    		<label for="dob">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" required value="">
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no" value="" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				            </div><!--End form-group-->
							<div class="form-group">
								<label for="city">City</label>
								<select name="city" id="city" class="form-control demo-default" required>
									<option value="">-- Location --</option>
									<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
										<option value="	Anantapur" >Anantapur</option>
										<option value="Kadapa" >Kadapa</option>
										<option value="	Tirupati" >	Tirupati</option>								
										<option value="Rajahmundry" >Rajahmundry</option>
										<option value="	Visakhapatnam" >Visakhapatnam</option>
										<option value="Vijayawada" >Vijayawada</option>
										
									<optgroup title="Uttar Pradesh " label="&raquo; Uttar Pradesh "></optgroup>
										<option value="Agra" >Agra</option>
										<option value="Akbarpur" >Akbarpur</option>
										<option value="Allahabad" >Allahabad</option>
										<option value="Badaun" >Badaun</option>
										<option value="Bareilly" >Bareilly</option>
										<option value="Basti" >Basti</option>
										<option value="Bulandshahar" >Bulandshahar</option>
										<option value="Deoria" >Deoria</option>
										<option value="Faizabad" >Faizabad</option>
										<option value="Gorakhpur" >Gorakhpur</option>
										<option value="Hapur" >Hapur</option>
										<option value="Lucknow" >Lucknow</option>
										<option value="Modinagar" >Modinagar</option>
										<option value="Meerut" >Meerut</option>
										<option value="Sahjahanpur" >Sahjahanpur</option>
										<option value="Muzaffarnagar" >Muzaffarnagar</option>
										<option value="Varanasi" >Varanasi</option>
									
										
									<optgroup title="Uttarakhand" label="&raquo;Uttarakhand"></optgroup>
										<option value="Almora" >Almora</option>
										<option value="Bageshwar" >Bageshwar</option>
										<option value="Bazpur" >Bazpur</option>
										<option value="Bhimtal" >Bhimtal</option>
										<option value="Champawat" >Champawat</option>
										<option value="Dehradun" >Dehradun</option>
										<option value="Haldwani-cum-Kathgodam" >Haldwani-cum-Kathgodam</option>
										<option value="Kashipur" >Kashipur</option>
										<option value="Nainital" >Nainital</option>

									<optgroup title="Delhi NCR" label="&raquo; Delhi NCR"></optgroup>
										<option value="New Delhi" >New Delhi</option>
								</select>
							</div><!--city end-->
							
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>