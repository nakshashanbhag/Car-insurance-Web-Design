<!DOCTYPE html>

<html>
<head>
<title>InstaBima</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
  <script type="text/javascript" src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{  background-image: url("snow.png"); 
		align: center;}
#overlay {
    position: absolute; /* Sit on top of the page content */
    width: 100%; /* Full width (cover the whole page) */
    height: 100%; /* Full height (cover the whole page) */
    top: 0; 
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.4); /* Black background with opacity */
    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    cursor: pointer; /* Add a pointer on hover */
}
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);
    transition: 0.3s;
	border-radius: 5px;
    width: 100%;
	background-color: white;
	margin-top: 50px;
	//text-align: center;
	padding: 10px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.center{ text-align: center;}
#headlines { font-size: 18px;
			 color: #383838;}

input.invalid {
  background-color: #ffdddd;
}			
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none; 
  border-radius: 50%;
  display: inline-block;
  opacity: 0.6;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
.tab {
  display: none;
}	
.image-upload > input
{
    display: none;
}
			 
			 
			 
</style>
</head>

<body>

<div id="overlay">
<div class="col-sm-8 col-sm-offset-2">
<div  class="card">
  <div class="center">
  <img src="logo.png" alt="logo">
  <div id="headlines">
  <b>Renewal Reminder</b>
  <br>
  </div>
  </div>
 <br> 
		<div class="center">
		<i class="fa fa-car" style="font-size:36px; color:#3daff6; padding-top:15px;border: 3px solid #3daff6;
			width: 80px;
			height: 80px;
			border-radius: 50%;"></i>
		</div>
		
  
 <br><br>
 <form id='register' action='' method='post' 
    accept-charset='UTF-8'  enctype="multipart/form-data">
<fieldset >
<input type='hidden' name='submitted' id='submitted' value='1' class = "box"/>
<div class="lol">
<div class="tab">
<div class="row">
<div class="col-sm-6">
<label for='regno'><i class="fa fa-car " style="color:#383838;"></i> Registration Number:</label>
<input type='text' name='regno' placeholder="Enter Registration Number..." id='regno' maxlength="50" class = "form-control"  />

</div>
<div class="col-sm-6">
<label for='name' ><i class="fa fa-user" style="color:#383838;"></i> Vehicle Owner's Name: </label>
<input type='text' name='name' id='name' maxlength="50" class = "form-control"placeholder="Enter Name..."  />
</div>
</div>
<br>
<div class="row">
<div class="col-sm-4">
<label for='email' ><i class="fa fa-envelope" style="color:#383838;"></i> Email Id:</label>
<input type='text' name='email' id='email' maxlength="50" class = "form-control" placeholder="Enter Email id..."/>
</div>
<div class="col-sm-4">
<label for='phone' ><i class="fa fa-mobile" style="color:#383838;"></i> Phone Number:</label>
<input type='phone' name='phone' id='phone' maxlength="50" class = "form-control" placeholder="Enter Phone number..." />
</div>
<div class="col-sm-4">
<label for='date'><i class="fa fa-calendar" style="color:#383838;"></i> DOB:</label>
<input name="dob" id="dob" type="date" class="form-control datepicker hasDatepicker">
</div>
</div>
	</div>
	
<div class="tab">
<div class="row">
<div class="col-sm-4">
<label for='model' ><i class="fa fa-car" style="color:#383838;"></i> Vehicle Model:</label>
<input type='text' name='model' id='model' maxlength="50" class = "form-control"placeholder="Enter Vehicle Model..."  />
</div>
<div class="col-sm-4">
<label for='year'><i class="fa fa-calendar" style="color:#383838;"></i> Manufacture Year:</label>
<input name="year" id="year" type="text" maxlength="50" class = "form-control" placeholder="Enter Year..." />
</div>
<div class="col-sm-4">
<label for='month'><i class="fa fa-calendar" style="color:#383838;"></i> Policy Expiry Month:</label>
<input name="month" id="month" type="text" maxlength="50" class = "form-control"placeholder="Enter Month..." />
</div>
</div>
<br>
<div class="row">
<div class="col-sm-4">
<label for='place'><i class="fa fa-address-card" style="color:#383838;"></i> RTO/Registration City:</label>
<input name="place" id="place" type="text" maxlength="50" class = "form-control"placeholder="Enter Place..." />
</div>
<div class="col-sm-4">	
	<div class="row">
		<div class="col-md-12">	
		<h6>Policy Claimed:</h6>
		</div>
		<div class="col-md-2">
		</div>	
		<div class="col-md-4">	
			<div class="radio radio-info">
				<input type="radio" id="policyyes" name="policy" checked="" value="Yes" aria-required="true" class="valid">
				<label for="policyyes">
					Yes
				</label>
			</div>													
		</div>
		<div class="col-md-6">
			<div class="radio radio-info">
				<input type="radio" id="policyno" name="policy" value="No" class="valid">
				<label for="policyno">
					No
				</label>
			</div>													
		</div>
	</div>
</div>
</div>
</div>

<div class="tab">
<div class="center">
<div id="headlines">
<p>Please Upload your Documents.</p>
<div class="row">
<div class="col-sm-6">
<div class="image-upload">
    <label for="file-input">
        <img src="upload.png"/>
    </label>
	<input id="file-input" type="file"/>
</div>
 <p> Upload RC <small>(optional)</small></p> 
</div>
<div class="col-sm-6">
 <div class="image-upload">
    <label for="file-inp">
        <img src="upload.png"/>
    </label>
	<input id="file-inp" type="file"/>
	
</div>
  <p> Upload Previous Policy <small>(optional)</small></p> <br>
</div>
</div>
</div>
<div class="col-xs-12">
	<div class="checkbox checkbox-info">
		<input type="checkbox" id="agree" name="agree" required="" aria-required="true">
		<label for="agree" style="font-size:13px;color:#000000">
			I authorize the website and its partners to contact me and agree to the <a href="https://www.instabima.com/privacy-policy" target="blank">Privacy Policy</a> and <a href="https://www.instabima.com/terms-of-use" target="blank">Terms of Service</a>
		</label> <br><br>
	</div>											
</div>




</div>
</div>


	<br><br>

  <div class="center">
    <button type="button" id="prevBtn" style="width:125px;" onclick="nextPrev(-1)"class="btn btn-info">Previous</button>
    <button type="button" name='Submit' value='Submit' id="nextBtn" style="width:125px;" onclick="nextPrev(1)"class="btn btn-info">Next</button>
  </div>

	<!--<div class="center">
	<button type="submit" name='Submit' value='Submit' style="width:125px;" class="btn btn-info">Next</button>
	<!--<input type='submit' name='Submit' value='Submit' align="center";/>
	</div>-->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>
</div>
</div>
</fieldset>
</form>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
<script type="text/javascript" src="script.js"></script>
</html>