<?php 

$conn=mysqli_connect("localhost","root","","guvi");

if(isset($_POST["name"]))
	{
		$query = "INSERT INTO resume(`name` ,`email` ,`password` ,`address` ,`city` ,`pin` ,`contact`) 
		VALUES(
		'".$_POST[ "name" ]              ."',
		'".$_POST[ "email" ]             ."',
		'".$_POST[ "password" ]          ."',
		'".$_POST[ "address" ]           ."',	
		'".$_POST[ "city" ]              ."',
		'".$_POST[ "pin" ]               ."',	
		'".$_POST[ "contact" ]           ."'
		)";
		$result = $conn->query($query);
		if($result)
		{
?>

		<SCRIPT	TYPE="text/javascript">
		alert("Your Registration was done Successful");	
		</SCRIPT>
		                 
	</body>

</html>

<?php
		}
		else
		{?>
		<SCRIPT	TYPE="text/javascript">
		alert("Register Failed due to invalid data");
		</SCRIPT>
<?php
		}
	}
?>

<html>
<form name="success" method="post">
	<head>
		<title>Registration</title>
        <link rel="stylesheet" type="text/css" href="css/reg.css">
	</head>

	<body>
	<form method="post" >
		<div class="wrapper">
          	<div class="two">
               
               
            	<div class="back">
                	<a href="index.html"><input type="button" value="Back" style="background-color:red;" /></a>
                </div>
                 
                <div class="two_txt">
            		<p><center><b>NEW USER REGISTRATION</b></center></p>
               </div>
               
            </div>
			
			<div class="route">
            <center><b><a href="success.php" style="font-size:30px">After registration click here to login...</a></b></center>
			</div>
			
			
            <div class="fields">
            	<div class="fields_box">
                	<div class="acon">
                    	<table align="center" width="500" cellspacing="10px" cellpadding="1px">
     					   <tr>
                            <td>NAME</td>
                            <td><input type="text" name="name" placeholder="Your Name" value="" size="30" maxlength="30"></td>
                           </tr>
                                                         
                            
                          
                           <tr>
                             <td>EMAIL ID</td>
                             <td><input type="text" name="email" placeholder="abc@mail.com" value="" size="30" maxlength="30"></td>
                           </tr>
                           
						   <tr>
                             <td>PASSWORD</td>
                             <td><input type="password" name="password" placeholder="Password" value=""size="30" maxlength="30"></td>
                           </tr>
                                                    
                            <tr>
                              <td align="left" valign="top">ADDRESS</td>
							  <td><textarea name="address" cols="32" rows="4" placeholder="Address"></textarea></td>
                            </tr>
                                            
                           
					    	<tr>
                             <td>CITY</td>
                             <td><input type="text" name="city" placeholder="City" value=""size="30" maxlength="30"></td>
                           </tr>
                           
                           <tr>
                             <td>PIN CODE</td>
                             <td><input type="number" name="pin" placeholder="Pin Codes" value=""size="30" maxlength="30"></td>
                           </tr>

                           
                           <tr>
                             <td>CONTACT NO</td>
                             <td><input type="number" name="contact" value="" size="30" maxlength="10"></td>
                           </tr>
                           
                    	</table>
                     </div>  
                    	 
                      
                      <div class="alogin">
                      	<div class="b1">
									
						   	<button class="button">REGISTER</button>&nbsp;
							
                        </div>    
                      </div></form>
                        
                      </div>
                </form>
                
            </div>
			
            
   		</div>
		</form>
		</body>
</html> 
