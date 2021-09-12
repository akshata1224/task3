
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
    
    
    
</head>
<body  >
	
    <?php
        $d=$d1=$d2=$d3='';
        
        
    ?>
    
    <!-- <div class="card"> -->
    <div class="container" >
        <form  id="Myform"  action="form.php" method="post" enctype="multipart/form-data" onsubmit="return fun()" >
            <!-- <label for="first">First Name</label> -->
            <input type="text" class="text1" id="first" name="firstname"placeholder="First Name" /><br/>
            <!-- <label for="last">First Name</label> -->
            <input type="text" class="text1"id="last" name="lastname" placeholder="Last Name" required/><br/>
            
            <input type="date" class="text1" name="dateofbirth"  id="d"
            placeholder="Date Of Birth" /><br/>
            
            
            <div  id="msg1" class="message" >  </div> 

            <input type="number" class="text1" name="phone"  id="iphone" value="" 
            placeholder="Phone Number" /> 
			
			
           <div  id="msg2"  class="message">  </div> 
			<br/>

            <input type="text" class="text1" name="address" placeholder="Address" required /><br/>
            <input type="number" class="text1" name="pincode" placeholder="Pin Code" required /><br/>
            <input type="file" class="text1" name="profile" placeholder="Choose File" value="" /><br/>
            
            
            <input type="submit" class="text1 submit"  name="upload" placeholder="Submit"  
			 />
        </form>
    </div>  
<!-- </div>   -->
	<script>
			var err="";
				const form=document.getElementById("Myform");
				//form.addEventListener('submit', (e)=> {
					//e.preventDefault();
				function fun(){
				
				var a=document.getElementById("d").value;
				var phoneno = /^\d{10}$/;
				var aj=document.getElementById("iphone").value;
				
				if((a=="") && (aj=="")){
					document.getElementById("msg1").innerHTML="**Enter any date";
					document.getElementById("msg2").innerHTML="**Enter any Number";
					return false;
				}
					
				  if(a!="")
				  {
					 document.getElementById("msg1").innerHTML="";
					   
				  }else{
					document.getElementById("msg1").innerHTML="**Enter any date";
					return false;
					
				  }
				  //phone number
					
					
				  if(aj.match.phoneno)
				  {
					 
					 
					   
				  }else{
					  //error="**Minimum length should be 10";
					  document.getElementById("msg2").innerHTML="**Minimum length should be 10";
					 return false;
				  }
				  
				}
			</script>


  
</body>
</html>