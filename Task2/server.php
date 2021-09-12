<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="task1";
	$conn=mysqli_connect($host,$user,$pass,$db);
    // echo "<script>alert('connect succesfully')</script>";

    if(isset($_POST['upload'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $dateofbirth=$_POST['dateofbirth'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $file=$_FILES['profile'];
        // print_r($file);

        if( ($firstname!=null) && ($lastname!=null) && ($dateofbirth!=null) && ($phone!=null)
            && ($address!=null) && ($pincode!=null ) && ($file!=null)){

            if(preg_match("/^[7-9][0-9]{9}$/",$phone) ) {

                $filename=$file['name'];
                $filepath=$file['tmp_name'];
                $fileerror=$file['error'];
                if($fileerror==0){
                    $destination='upload/'.$filename;
                    move_uploaded_file($filepath,$destination);
                }
                
                    
                

                $sql="INSERT INTO `task1` (`firstname`,`lastname`,`dateofbirth`,
                `phone`,`address`,`pincode`,`profile`)
                VALUES ('$firstname','$lastname','$dateofbirth','$phone','$address',
                '$pincode','$destination')";

                $query=mysqli_query($conn,$sql);
                if($query){
                    echo "<script>alert('inserted succesfully')</script>";
                }else{
                    echo "<script>alert('Sorry, something went wrong, Data not inserted')/script>";
                }
            }else{
               //  echo "<script>alert('Enter valid Phone number')</script>";
            }
        }else{
           // echo "<script>alert('All Field should be entered')</script>";
        }
    }
	
?>