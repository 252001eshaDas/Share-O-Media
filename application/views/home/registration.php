<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/reg_css/style.css">
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
                    <?php
                       /* if (isset($this->session->flashdata('error'))) {
                            echo $this->session->flashdata('error');
                        }

                        if (isset($this->session->flashdata('success'))) {
                            echo $this->session->flashdata('success');
                        }*/
                    ?>
                    <form id="booking-form" action="<?php echo base_url() ?>submit_registration" method="POST" enctype="multipart/form-data">
                        <h2>Register !</h2>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" >
                            <label for="name" class="form-label">Name</label>
                            <span><?php echo form_error('name'); ?></span>
                            
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" >
                            <label for="email" class="form-label">Email Address</label>
                            <span><?php echo form_error('email'); ?></span>
                    

                        </div>

                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" value="" >
                            <label for="phone" class="form-label">Phone Number</label>
                             <span><?php echo form_error('phone'); ?></span>
                   

                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="dob" id="dob" value="" >
                            <label for="dob" class="form-label">Date</label>
                            <span><?php echo form_error('dob'); ?></span>

                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="location" id="address" value="" >
                            <label for="address" class="form-label">Address</label>
                            <span><?php echo form_error('location'); ?></span>

                        </div>
                        <div class="form-groupf">
                            <label class="label-radio">Gender</label>
                            <input type="radio" name="gender" value="1" id="gender1" />
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="2" id="gender2" />
                            <label for="gender">Female</label>
                            <input type="radio" name="gender" value="3" id="gende3r" />
                            <label for="gender">Others</label>

                            <!-- <div class="radiodd-item">
                                <span class="radiodd-item">
                                    <input type="radio" name="gender" value="1" id="gender1" />
                                    <label for="gender">Male</label>
                                </span>
                                <span class="radioddd-item">
                                    <input type="radio" name="gender" value="2" id="gender2" />
                                    <label for="gender">Female</label>
                                </span>
                                <span class="radioddd-item">
                                    <input type="radio" name="gender" value="3" id="gende3r" />
                                    <label for="gender">Others</label>
                                </span>
                                
                            </div> -->
                        </div>

                        <div class="form-group form-input">
                            <input type="file" name="image" id="image" value="" >
                            <label for="image" class="form-label">Image</label>

                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value="" >
                            <label for="password" class="form-label">Password</label>
                             <span><?php echo form_error('password'); ?></span>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Sign Up" class="submit" id="submit" name="submit" />
                            <a href="login" class="vertify-booking">Already Registered?</a>
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