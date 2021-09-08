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
            echo "<script>alert('Sorry, could not insert data')</script>";
        }
    }
}
	
?>