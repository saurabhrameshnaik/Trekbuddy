<?php
session_start();
if(!isset($_SESSION['logged_in']))
  {
    header('Location:./index.php');
  }

require_once('./Templates/header.php');
?>
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-sm-4">
<!-- Links parimal-->
											<form method ="post" action ="insertguide.php" enctype="multipart/form-data" >
												
													
											
											<h4>Guide Registration </h4>

											

											<div class="form-group">
											<label for="guide">Guide Name : </label>
											<input type="text" name= "name" class="form-control" />
											</div>

											<div class="form-group">
											<label for="gender">Gender </label>
											<input type="radio" name= "gender" value="male" checked> Male
											<input type="radio" name= "gender" value ="female"> Female
											</div>


											<div class="form-group">
											<label for="contact">Guide Contact No.</label>
											<input type="text" class="form-control" name ="contact"/>
											</div>

											<div class="form-group">
											<label for="service">Services Provides</label>
											<input type="text" class="form-control" name="services"/></td>
											</div>

											<div class="form-group">
											<label for="rating">rating</label>
											<input type="text" class="form-control" name="rating"/>
											</div>

											<div class="form-group">
											<label for="photo">photo</label>
											<input type="file" class="form-control" name="imageToupload" id= "imageToupload"  />
											</div>

											<div class="form-group">
											<label for="Notes">Notes</label>
											 <textarea  class="form-control" rows = "5" cols="30" name="notes">   </textarea>
											</div>
											
											<div class="form-group">
											<center> <input type ="submit" value="Save" class="btn-primary"  ></center>

											</div>

											


											
											





											</form>
 <!-- -->
</div>
 <div class="col-sm-4">
</div>

</div>



<?php
require_once('./Templates/footer.php');
?>