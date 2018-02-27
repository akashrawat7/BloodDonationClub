<!--file where data is fetched-->
<!--connection file seperately added-->
<php>
	<?php 
	include("connect.php");
	?>
	<head>
		<link rel="stylesheet" href="blood.css"/>	
			<title>
				Blood donation club
			</title>		
	</head>
<body background="../pics/g2.jpg"  style="background-attachment:fixed;">
		<center>
		<div class="container" style="background-color:bisque;">	
		<!--header file seperately added-->
				<?php 
				include("header.php");
				?>
				<!--menu file seperately added-->
				<?php 
				include("menu.php");
				?>
				
			<div class="slider">			
			</div>
				<div class="main">				
				<h1 style="font-face:arial;">Need help?<br>search the blood group you want.<br><br>here!!<br></h1>				
				</div>	
					<div class="">										
						<form method = "get" action = "new.php" enctype = "multipart/form-data">
						<input name = "user_query" style="border-radius:5px; height:40px;"type="text" size="50px"  placeholder="search blood doners by blood group"//>
						<input style="color:yellow; border-radius:5px; background-color:red; height:30px;" type="submit" value="search" name="search"/>
					</form><br><br><br><br>																					   									
				</div>			
				<div class='f'>
							
							<div class='firstname' style='float:left; height:auto; width:250px; border:1px solid; background-color:red; border-radius:50px; margin-left:10px;'>
							<h1>name</h1>														
							</div>													
							<div class='address' style='float:left; height:auto; width:250px; border:1px solid; background-color:red; border-radius:50px;'>
							<h1> address</h1>					
							</div>	
								<div class='blood group' style='float:left; height:auto; width:250px; border:1px solid; background-color:red; border-radius:50px;'>
								<h1>blood group</h1>				
							</div>		
						<div class='email id' style='float:left; height:auto; width:240px; border:1px solid; background-color:red; border-radius:50px;'>
						<h1>email id</h1>
							</div>
								
					<!--fetching data-->
				
				<div class = "data">
					<?php
					 if (isset($_GET['search'])){                                    
                     $search_query = $_GET['user_query'];                                    
					$get_pro = "select * from regform1 where blood_group like '%$search_query%'";										
					$run_pro = mysqli_query($con, $get_pro);					
					$count = mysqli_num_rows($run_pro);
					
					if($count == 0){
						echo"<h2 style = 'padding:20px;'> No details available for this!<h2>";
					}
					while($row_pro = mysqli_fetch_array($run_pro)){
						
							
						$pro_first_name = $row_pro['first_name'];
						$pro_last_name = $row_pro['last_name'];
						$pro_blood_group = $row_pro['blood_group'];
						$pro_email_id = $row_pro['email_id'];
						$pro_contact_no = $row_pro['contact_no'];
						$pro_address = $row_pro['address'];
						
							echo "																	
							<div class='firstname' style='float:left; height:auto; width:240px; border:1px  ; background-color:;margin-left:10px;'>
							<h4>$pro_first_name $pro_last_name							
							</div>																				
							<div class='address' style='float:left; height:auto; width:240px; border:1px; background-color:; margin-left:10px;'>
							<h4>$pro_address							
							</div>								
								<div class='blood group' style='float:left; height:auto; width:240px; border:1px  ; background-color:;margin-left:10px;'>
									<h4>$pro_blood_group
							</div>						
						<div class='email id' style='float:left; height:auto; width:240px; border:1px ; background-color:;margin-left:19px;'>
								<h4>$pro_email_id
							</div>		
			
			";
		}		
	}	
?>				
			</div>
		</center>		
	</body>
</php>

