<php>
<!--connection file to connect with database-->
		<?php 
			include("connect.php");
		?>
	<head>
			<title>
			Blood donation club
			</title>					
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="blood.css"/>
	</head>
<body background="../pics/g2.jpg" style="background-attachment:fixed;">
		<center>
		<div class="container">
		<!--header file seperately added-->
				<?php 
				include("header.php");
				?>
					<!--menu file seperately added-->
				<?php 
				include("menu.php");
				?>
			</div>
			<div class="slider">
			</div>
				<div class="main">				
				<h1 style="font-face:arial;">Need help?<br>Search the blood group you want.<br><br>here!!<br></h1>
				</div>	
					<div class="">																		  		   										
					<div class="">				
						<form method = "get" action = "new.php" enctype = "multipart/form-data">
						<input name = "user_query" style="border-radius:5px; height:40px;"type="text" size="50px"  placeholder="search blood doners by blood group" required//>
						<input style="color:yellow; border-radius:5px; background-color:red; height:30px;" type="submit" value="search" name="search"/>
					</form>					
				</div>			
					<div class="newdiv1">										
					</div>				
						<div class="newdiv2">						
						<h1>Get registered your name<br>as a blood doner!<br>&<br>Help people.!<br><br>click here!<br></h1>						
				<a href="getregistered.php"><input style="color:yellow; border-radius:10px; background-color:darkturquoise; height:40px;" type="button" value="GET REGISTERED"></a>						
						</div>	
				<!--footer section-->						
							<div class="footer">				
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
		</php>