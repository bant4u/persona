<?php 
	include('include/header.php');
	include('include/left.php');

if(isset($_POST['tbn_save_submit'])){

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$marital_status = $_POST['marital_status'];
$temp_address = $_POST['temp_address'];
$per_address = $_POST['per_address'];
//echo $_POST['gender'];
//echo $_POST['marital_status'];
var_dump($_POST);
}

?>


      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
        	<form action="personal.php" method="POST">
			  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    	<input class="mdl-textfield__input" type="text" id="first_name" name="first_name">
			    	<label class="mdl-textfield__label" for="sample3">First Name...</label>

			  	</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" id="middle_name" name="middle_name">
					<label class="mdl-textfield__label" for="sample3">Middle Name...</label>
				</div>
				  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="last_name" name="last_name">
				    <label class="mdl-textfield__label" for="sample3">Last Name...</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="dob" name="dob">
				    <label class="mdl-textfield__label" for="sample3">DOB(yyyy-mm-dd)</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option1">
            		<input type="radio" id="option1" name="gender" class="mdl-radio__button" value="M" >
            		<span class="mdl-radio__label" >Male</span>
         			</label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option2">
            		<input type="radio" id="option2" name="gender" class="mdl-radio__button" value="F" >
            		<span class="mdl-radio__label" >Female</span>
         			</label>
         			<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option3">
            		<input type="radio" id="option3" name="gender" class="mdl-radio__button" value="O" >
            		<span class="mdl-radio__label" >Others</span>
         			</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="married" >
            		<input type="radio" id="married" name="marital_status" class="mdl-radio__button" value="M">
            		<span class="mdl-radio__label">Married</span>
         			</label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="unmarried">
            		<input type="radio" id="unmarried" name="marital_status" class="mdl-radio__button"  value="U">
            		<span class="mdl-radio__label">Unmarried</span>
         			</label>
         			<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="others">
            		<input type="radio" id="others" name="marital_status" class="mdl-radio__button" value="O">
            		<span class="mdl-radio__label" >Others</span>
         			</label>
				</div>

				<br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="temp_address" name="temp_address">
				<label class="mdl-textfield__label" for="sample3">Temporary Address</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="per_address" name="per_address">
				<label class="mdl-textfield__label" for="sample3">Permanent Address</label>
				</div>
				<br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="nationality" name="nationality">
				    <label class="mdl-textfield__label" for="sample3">Nationality</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="religion" name="religion">
				    <label class="mdl-textfield__label" for="sample3">Religion</label>
				</div>
				<br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="mob_num" name="mob_num">
				    <label class="mdl-textfield__label" for="sample3">Mobile Number</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="ph_num" name="ph_num">
				    <label class="mdl-textfield__label" for="sample3">Phone Number</label>
				</div>
				<br>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="email" name="email">
				    <label class="mdl-textfield__label" for="sample3">Email</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" type="text" id="alt_email" name="alt_email">
				    <label class="mdl-textfield__label" for="sample3">Alternate Email</label>
				</div>
				<br>
				<input type="submit" name="tbn_save_submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Save">
			</form>



        </div>
      </main>