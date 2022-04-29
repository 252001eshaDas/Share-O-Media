<?php
$conn = mysqli_connect('localhost','root','','share_o_media');

if ($conn) {
    ?>
    <script type="text/javascript">
        alert('connected');
    </script>
    <?php
}
?>
<?php
if (isset($_REQUEST['submit'])) {

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$selectQuery = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
$query = mysqli_query($conn,$selectQuery);


$num_rows = mysqli_num_rows($query);


if ($num_rows==1) {
    $data  = mysqli_fetch_assoc($query);
    header('location:userList');
}else{
    echo "login failure";
}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Share-O-Media</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login_css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <a href="<?php echo base_url() ?>">
                        <img class="booking-img" src="<?php echo base_url() ?>assets/images/form-img.jpg" alt="Booking Image">
                    </a>
                    
                </div>
                <div class="booking-form">
                    <form id="booking-form"  method="POST">
                        <h2>Admin Login Here</h2>
                        
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" >
                            <label for="email" class="form-label">Email Address</label>
                            <span><?php echo form_error('email'); ?></span>
                        </div>

                        
                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value="">
                            <label for="password" class="form-label">Password</label>
                            <span><?php echo form_error('password'); ?></span>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Sign-In" class="submit" id="submit" name="submit" />
                            <a href="registration" class="vertify-booking">New User?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


