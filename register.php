<?php require_once('config/config.php'); ?>
<html lang="en" dir="ltr">
  <head>
      <?php include 'resources/templates/mainHeader.php'; ?>
  </head>
  <body>
    <?php include_once ('resources/templates/navbarMain.php'); ?>
    <div id="form_container">
  		<form id="form_38790" class="appnitro"  method="post" action="resources/utility/create_user.php">
  					<div class="form_description">
  			<h2>Student Explained Registration</h2>
  			<p></p>
  		</div>
  			<ul >
  					<li id="li_1" >
      		<label class="description" for="element_1">Name </label>
      		<span>
      			<input id="element_1_1" name= "f_name" class="element text" maxlength="255" size="14" value=""/>
      			<label>First</label>
      		</span>
      		<span>
      			<input id="element_1_2" name= "l_name" class="element text" maxlength="255" size="14" value=""/>
      			<label>Last</label>
      		</span>
      		</li>		<li id="li_2" >
      		<label class="description" for="element_2">Email </label>
      		<div>
      			<input id="element_2" name="email" class="element text medium" type="email" maxlength="255" value=""
            placeholder="Johnsmith@yahoo.com" required/>
      		</div><p class="guidelines" id="guide_5"><small>Enter a valid Email. You will use this as your username</small></p>
      		</li>		<li id="li_3" >
      		<label class="description" for="element_3">Password </label>
      		<div>
      			<input id="element_3" name="password" class="element text medium" type="text" maxlength="255" value=""
            onkeydown="limit(this, 12);" onkeyup="limit(this, 12);" onkeyup="this.value = minmax(this.value, 6, 12)" required/>
      		</div><p class="guidelines" id="guide_5"><small>Password must be 6-10 alphanumeric characters </small></p>
      		</li>		<li id="li_4" >
      		<label class="description" for="element_4">Phone </label>
      		<span>
      			<input id="element_4_1" name="phone1" class="element text" size="3" maxlength="3" value="" type="number"
            onkeydown="limit(this, 3);" onkeyup="limit(this, 3);" onkeyup="this.value = minmax(this.value, 3, 3)" required> -
      			<label for="element_4_1">###</label>
      		</span>
      		<span>
      			<input id="element_4_2" name="phone2" class="element text" size="3" maxlength="3" value="" type="number"
            onkeydown="limit(this, 3);" onkeyup="limit(this, 3);" onkeyup="this.value = minmax(this.value, 3, 3)" required> -
      			<label for="element_4_2">###</label>
      		</span>
      		<span>
      	 		<input id="element_4_3" name="phone3" class="element text" size="4" maxlength="4" value="" type="number"
            onkeydown="limit(this, 4);" onkeyup="limit(this, 4);" onkeyup="this.value = minmax(this.value, 4, 4)" required>
      			<label for="element_4_3">####</label>
      		</span>
      		</li>
          <li id="li_6" >
      		<label class="description" for="element_6">Security Question </label>
      		<div>
          		<select class="element select medium" id="element_6" name="sec_question">
              <option value="Favorite Color" >Favorite Color</option>
              <option value="Favorite beverage" >Favorite beverage</option>
              <option value="Favorite breed of dog" >Favorite breed of dog</option>
      		</select>
  		   </div>
  		</li>
      <li id="li_7" >
      <label class="description" for="element_7">Security Answer</label>
      <div>
        <input id="element_7" name="sec_answer" class="element text medium" type="text" maxlength="255" value=""/>
      </div><p class="guidelines" id="guide_7"><small>Answer to security question</small></p>
      </li>
      <li id="li_5" >
  		<label class="description" for="element_5">6 Digit Security Pin</label>
  		<div>
  			<input id="element_5" name="dig_pin" class="element text medium" type="number" maxlength="255" placeholder="123456"
        onkeydown="limit(this, 6);" onkeyup="limit(this, 6);" onkeyup="this.value = minmax(this.value, 0, 6)" required/>
  		</div><p class="guidelines" id="guide_5"><small>6 Digits used for account recovery </small></p>
  		</li>
  					<li class="buttons">
  				<input id="saveForm" class="submitFormBtn" type="submit" name="submit" value="Submit" />
  		</li>
  			</ul>
  		</form>
  	</div>
      <?php include 'resources/templates/mainFooter.php'; ?>
      <?php include 'resources/templates/loginPopup.php'; ?>
      <?php
        if(isset($_SESSION['email'])){
         redirect();
        }
       ?>
  </body>
</html>
