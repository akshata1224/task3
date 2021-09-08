
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
<body>
    <!-- <div class="card"> -->
    <div class="container">
        <form action="form.php" method="post" enctype="multipart/form-data">
            <!-- <label for="first">First Name</label> -->
            <input type="text" class="text1" id="first" name="firstname"placeholder="First Name"/><br/>
            <!-- <label for="last">First Name</label> -->
            <input type="text" class="text1"id="last" name="lastname" placeholder="Last Name"/><br/>
            
            <input type="date" class="text1" name="dateofbirth" placeholder="Date Of Birth"/><br/>
            <input type="number" class="text1" name="phone" placeholder="Phone Number"/><br/>
            <input type="text" class="text1" name="address" placeholder="Address"/><br/>
            <input type="number" class="text1" name="pincode" placeholder="Pin Code"/><br/>
            <input type="file" class="text1" name="profile" placeholder="Choose File"/><br/>
            <input type="submit" class="text1 submit"  name="upload" placeholder="Submit"/>
        </form>
    </div>  
<!-- </div>   -->
</body>
</html>