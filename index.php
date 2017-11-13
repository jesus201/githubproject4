<!DOCTYPE html>
<html>
<head>
	<title>fourth github heroku project</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.style_div{
	padding:20px;
	background-color: #FF8800;
	width:50%;
	margin: auto;
	border-radius: 5px;
	
}
body{
	margin-top: 60px;
}
</style>
</head>
<body>
      <div class="container">
   	  <div class="col-md-12">
     	  <div class="style_div">
     	  	   <div class="row">
     	  	      <p style="text-transform: uppercase; color: #fff; text-align: center; font-size: 60px;" id="head_tx">signin</p><hr>

     	  	       <!--SIGNIN-->
     	  	      <div id="signin_div" style="display: block;">
     	  	      	  <form action="" method="POST">
     	  	      	  	    <div class="col-md-12 form-group">
     	  	      	  	    	 <input type="text" name="email" id="e_m" class="form-control" placeholder="Your Email*">
     	  	      	  	    </div>
     	  	      	  	    <div class="col-md-12 form-group">
     	  	      	  	    	 <input type="password" name="password" id="p_w" class="form-control" placeholder="Your Password*">
     	  	      	  	    </div>
     	  	      	  	    <div class="col-md-12 form-group">
     	  	      	  	    	 <button type="submit" class=" btn btn-primary form-control">SUBMIT</button>
     	  	      	  	    </div>
     	  	      	  	    <a style="color: #fff; padding: 15px; cursor: pointer;" onclick="signup()">Already have an Account!. Sign Up!</a>
     	  	      	  </form> 
     	  	      </div>
     	  	      <!--END OF SIGNIN-->
                   

     	  	     <!--SIGN UP-->
     	  	   	    <div id="signup_div" style="display: none;">
     	  	   	    	 <form action="controller/formhandlers/signup.php" method="POST">
     	  	   	    	 	   <div class="col-md-6 form-group">
     	  	   	    	 	   	    <input type="text" name="fname" id="f_n" class="form-control" placeholder="First Name*">
     	  	   	    	 	   	</div>
 	  	   	    	 	   	    <div class="col-md-6 form-group">
 	  	   	    	 	   	    	<input type="text" name="lname" id="l_n" class="form-control" placeholder="Last Name*">
 	  	   	    	 	   	    </div>
     	  	   	    	 	   <div class="form-group col-md-12">
     	  	   	    	 	   	    <input type="text" name="email" id="e_m" class="form-control" placeholder="Email Address*">
     	  	   	    	 	   </div>
     	  	   	    	 	    <div class="form-group col-md-12">
     	  	   	    	 	   	    <input type="password" name="pword" id="p_w" class="form-control" placeholder="Your Password*">
     	  	   	    	 	   </div>
     	  	   	    	 	   <div class="form-group col-md-12">
     	  	   	    	 	   	    <input type="password" name="cpword" id="p_w2" class="form-control" placeholder="Confirm Password*">
     	  	   	    	 	   </div>
     	  	   	    	 	   <div class="form-group col-md-12">
     	  	   	    	 	   	   <button type="submit"  name="signup" class="btn btn-primary form-control">SEND</button>
     	  	   	    	 	   </div>
     	  	   	    	 	   <a style="color: #fff; padding: 15px;  cursor: pointer;"  onclick="signin()">Sign into your Account!.</a>
     	  	   	    	 </form>
     	  	   	    </div>
     	  	   	 <!--END OF SIGNUP-->   
     	  	  
     	  	   </div>
     	  </div>
     </div>
   </div>
</body>
    <script>
   	      function signup(){
   	      	jQuery("#signin_div").css("display","none");
   	      	jQuery("#signup_div").css("display","block");
   	      	jQuery("#head_tx").html("SIGNUP");
   	      }

   	      function signin(){
   	      	jQuery("#signin_div").css("display","block");
   	      	jQuery("#signup_div").css("display" ,"none");
   	      	jQuery("#head_tx").html("SIGNIN");
   	      }
   </script>  
</html>