<?php 

	//include header file
	include ('include/header.php');

?>

<br><br><br><br>
<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
									<option value="">-- Location --</option>
									<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
										<option value="	Anantapur" >	Anantapur</option>
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
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 240px; height: 45px;" class="form-control demo-default text-center margin10px">
									<option value="">---Select Blood Group---</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<blockquote class="blockquote">
  							<p class="mb-0 text-center font-italic" style="font-size:25px; color:white;">Donate the blood : an appeal. This act of yours of donating blood can save a life.  This is made easy with this web service as we give you a chance to easily search for a medical institute which would provide the blood you donated to save a life.  So we welcome you to this act of service.</p>
						</blockquote>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								We as a group of programmers and as the people of this world have developed this web service for the people in need and for those who have a feeling of philanthropy.  This service also helps the medical institutions to improve and develop its blood bank system so that it can be better than ever
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								motive of this service provided is to save lives by making it simple for the people in need to obtain the blood accordingly. this web service also helps the one who like helping others by making it easy for them to find a platform or institute where they can donate blood in a discreet way if they want it to be done privately. this goal can be accomplished with the help of this webservice as it is easy to use and makes it very simple for the blood banks and hospitals to keep a track of the blood , the donors and the recepients.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								SAVE THE LIVES. this is a simple yet very important mission which we want to accomplish . this service is developed with this one mission in its core . being easy to use and easily available to every possible user this service can be accessed at dire times and in emergencies. along with saving lives this webservice keeps a track a record of the donors , the receivers, and the quantity along with the type of blood.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>