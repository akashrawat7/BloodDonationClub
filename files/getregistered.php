<html>
		<?php 
			include("connect.php");
		 ?>
			<head>
				<link rel="stylesheet" href="blood.css"/>
				<title>
					Blood donation club
				</title>
			</head>
		<body background="../pics/g2.jpg" style="background-attachment:fixed;">
<center>

				<!--header file seperately added-->

			<?php 
				include("header.php");
				?>
				
				<!--menu file seperately added-->
				
			<?php 
				include("menu.php");
				?>
				
			</div>
			</center>	
     <center>
	<div class="new" style="height:550px; width:1024px; border:1px solid; "> 
	   <div class="get1">	   
		<br>Registration Form		
	   </div>			    
		  <div class="get"><br><br>		 
		  <form onsubmit="return (c())" action = "getregistered.php" method = "post" enctype = "multipart/form-data">		  
		   First Name: &nbsp;&nbsp;&nbsp;<input type="text" Id="fname" placeholder="Enter your first name" name="first_name"><br><br>
		   Last Name: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" Id="lname" placeholder="Enter your last name" name="last_name"><br><br>
                   Blood group:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <Select name="blood_group">
                   <option> A+</option>
                   <option> A-</option>	
				   <option> O+</option>	
				   <option> O-</option>	
				   <option> B+</option> 
				    <option> B-</option> 
				   <option> AB+</option> 
				  <option> AB-</option> 
                   </select></br><br>				   		                        			   
           E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" Id="email" placeholder="Enter your email id" name="email_id"><br>	<br>		   
		   Contact No.: &nbsp;&nbsp;<input type="text" Id="number" placeholder="Enter your mobile number" name="contact_no"><br><br>	   
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address/city:&nbsp;&nbsp;&nbsp;<input type="text" Id="address" placeholder="Enter your address(city/place)" name="address" style="height:30px; width:200px;"><br><br>		        		          
		           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <input type="submit" value="submit" name="insert_post" >
       	           </form>
                 
				 <!--java script using for form validation-->
				 
				          <script>
		           function c()
		           {
	var fname=document.getElementById("fname");
	var alpha=/^[a-zA-Z]+$/;
		if(!alpha.test(fname.value))
   {
		alert("please enter the name!");
		return false;
   }
   
   	var lname=document.getElementById("lname");
	var beta=/^[a-zA-Z]+$/;
		if(!beta.test(lname.value))
   {
		alert("please fill your last name!");
		return false;

   }
	
	var email=document.getElementById("email");
	var gama=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if(!gama.test(email.value))
   {
		alert("please enter the email correctly!");
		return false;


   }  
	
	
  var number=document.getElementById("number");
	var num=/^\d{10}$/;
		if(!num.test(number.value))
   {
		alert("please enter the number correctly!");
		return false;
   }  					   				   	  			   							   
	  }				   
	    </script>		
		  </div>
           <!--foter section-->
		  
			<div class="footera">		
				<div class="fa">					
				<a href="index.php">Home</a>		
				</div>					
					<div class="fb">					
					<a href="about.php">About</a>			
					</div>										
						<div class="fc">			
						<a href="whydonation.php">Why donation!</a>			
						</div>													
							<div class="fd">				
							<a href="getregistered.php">Get registered</a>		
							</div>													
								<div class="fe">			
								<a href="contactus.php">Contact us</a>			
								</div>					
									<div class="foot11">				
									copyright &copy; akash rawat				
									</div>				
			</div>			
    </div>	
			</center>
</body>
</html>

<?php 
	if(isset($_POST['insert_post'])){
		
		//getting the text data from the fields

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$blood_group = $_POST['blood_group'];
		$email_id = $_POST['email_id'];
		$contact_no= $_POST['contact_no'];
		$address= $_POST['address']; 
		
		 $insert_regform1 = "insert into regform1 (last_name,blood_group,first_name,email_id,contact_no,address) "
        . "values ('$last_name','$blood_group',' $first_name','$email_id','$contact_no','$address')";
		
		 $insert_reg = mysqli_query($con, $insert_regform1);
		
		if($insert_reg){
			
			echo"<script>alert('details has been inserted!')</script>";
			echo "<script>window.open('insert_regform1.php','self')</script>";	
		}
		else 
		{
			echo"<script>! There is an error</script>";
		}
			
	}
?>