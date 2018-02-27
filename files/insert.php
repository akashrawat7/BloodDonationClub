<?php 
	if(isset($_POST['insert_post'])){
		
		//getting the text data from the fields

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$blood_group = $_POST['blood_group'];
		$date_of_birth = $_POST['date_of_birth'];
		$email_id = $_POST['email_id'];
		$contact_no. = $_POST['contact_no.'];
		 
		
		 $insert_regform = "insert into regform (last_name,blood_group,first_name,date_of_birth,email_id,contact_no.) "
        . "values ('$last_name','$blood_group',' $first_name','$date_of_birth','$email_id','$contact_no.')";
		
		 $insert_reg = mysqli_query($con, $insert_regform);
		
		if($insert_reg){
			
			echo"<script>alert('details has been inserted!')</script>";
			echo "<script>window.open('insert_regform.php','self')</script>";	
		}
		else 
		{
			echo"<script>! There is an error</script>";
		}
			
	}
?>