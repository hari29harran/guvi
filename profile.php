<?php 
    session_start();
    if(isset($_SESSION['key']) && $_SESSION['key']==1)
    {
?>
<!-- DOCTYPE HTML -->
<html>
    <head>
        <title>New User Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Including Bootstrap,Jquery and Stylesheet Files -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    <body>
        <?php 
                
                include 'db.php';
                $email=$_SESSION['email'];
                $sql="SELECT * FROM user WHERE email='$email'";
                if($res=mysqli_query($con,$sql))
                {
                    $row=mysqli_fetch_array($res);
                }
                
        ?>
        <div class="main">
            <div class="form">
            <!-- Heading -->
            <div class="text-center" >
                <h3><i>Profile</i></h3>
                <h5 id="logout" class="text-danger text-right">Logout</h5>
            </div>
            
             <!-- Signup Form -->
            <form id="form">
            <div class="form-group">
                <!-- Firstname Icon -->
                <div class="img">
                    
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M256,0C114.844,0,0,114.844,0,256s114.844,256,256,256s256-114.844,256-256S397.156,0,256,0z M256,74.667
                            c67.635,0,122.667,55.031,122.667,122.667S323.635,320,256,320s-122.667-55.031-122.667-122.667S188.365,74.667,256,74.667z
                            M256,469.333c-69.707,0-131.52-33.755-170.473-85.615c42.676-20.534,103.621-42.385,170.473-42.385
                            c66.857,0,127.807,21.854,170.474,42.383C387.521,435.577,325.708,469.333,256,469.333z"/>
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
                </div>
                <!-- Firstname Input Field -->
                <input type="text" name="fname" value="<?php echo $row['firstname']; ?>" class="form-fields" placeholder="First Name" readonly/>
            </div>
            <br/>
            <div class="form-group">
                <!-- Lastname Icon -->
                <div class="img">
                    
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M256,0C114.844,0,0,114.844,0,256s114.844,256,256,256s256-114.844,256-256S397.156,0,256,0z M256,74.667
                            c67.635,0,122.667,55.031,122.667,122.667S323.635,320,256,320s-122.667-55.031-122.667-122.667S188.365,74.667,256,74.667z
                            M256,469.333c-69.707,0-131.52-33.755-170.473-85.615c42.676-20.534,103.621-42.385,170.473-42.385
                            c66.857,0,127.807,21.854,170.474,42.383C387.521,435.577,325.708,469.333,256,469.333z"/>
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
                </div>
                <!-- Lastname Input Field -->
                <input type="text" name="lname" value="<?php echo $row['lastname']; ?>" class="form-fields" placeholder="Last Name" readonly/>
            </div>
            <br/>
            <div class="form-group">
                <!-- Gender Icon -->
                <div class="img">
                    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="36" height="32" viewBox="0 0 36 32">
                    
                    <path d="M24 24.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z"></path>
                    <path d="M10.225 24.854c1.728-1.13 3.877-1.989 6.243-2.513-0.47-0.556-0.897-1.176-1.265-1.844-0.95-1.726-1.453-3.627-1.453-5.497 0-2.689 0-5.228 0.956-7.305 0.928-2.016 2.598-3.265 4.976-3.734-0.529-2.39-1.936-3.961-5.682-3.961-6 0-6 4.029-6 9 0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h8.719c0.454-0.403 0.956-0.787 1.506-1.146z"></path>
                    </svg>
    
                </div>
                <!-- Gender Select Box -->
                <select class="form-fields" name="gender">
                    
                    <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                    
                </select>
            </div>
            <br/>
            <div class="form-group">
                <!-- Date of Birth Icon -->
                <div class="img">
                    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>calendar</title>
                    <path d="M10 12h4v4h-4zM16 12h4v4h-4zM22 12h4v4h-4zM4 24h4v4h-4zM10 24h4v4h-4zM16 24h4v4h-4zM10 18h4v4h-4zM16 18h4v4h-4zM22 18h4v4h-4zM4 18h4v4h-4zM26 0v2h-4v-2h-14v2h-4v-2h-4v32h30v-32h-4zM28 30h-26v-22h26v22z"></path>
                    </svg>
    
                </div>
                <!-- Date of Birth Input Field -->
                <input type="date" name="dob" class="form-fields" value="<?php echo $row['dob']; ?>"  placeholder="Date of Birth" readonly/>
            </div>
            <br/>
            <div class="form-group">
                <!-- Age Icon -->
                <div class="img">
                    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>list-numbered</title>
                        <path d="M12 26h20v4h-20zM12 14h20v4h-20zM12 2h20v4h-20zM6 0v8h-2v-6h-2v-2zM4 16.438v1.563h4v2h-6v-4.563l4-1.875v-1.563h-4v-2h6v4.563zM8 22v10h-6v-2h4v-2h-4v-2h4v-2h-4v-2z"></path>
                        </svg>
    
                </div>
                <!-- Age Input Field -->
                <input type="number" name="age" value="<?php echo $row['age']; ?>" class="form-fields"  placeholder="Age" />
            </div>
            <br/>
            <div class="form-group">
                <!-- Email Icon -->
                <div class="img">
                    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    
                    <path d="M29 4h-26c-1.65 0-3 1.35-3 3v20c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-20c0-1.65-1.35-3-3-3zM12.461 17.199l-8.461 6.59v-15.676l8.461 9.086zM5.512 8h20.976l-10.488 7.875-10.488-7.875zM12.79 17.553l3.21 3.447 3.21-3.447 6.58 8.447h-19.579l6.58-8.447zM19.539 17.199l8.461-9.086v15.676l-8.461-6.59z"></path>
                    </svg>
    
                </div>
                <!-- Email Input Field -->
                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-fields" placeholder="Email" readonly/>
            </div><br/>
            
                
            <div class="form-group">
                <!-- Mobile Icon -->
                <div class="img">
                    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    
                    <path d="M23 0h-14c-1.65 0-3 1.35-3 3v26c0 1.65 1.35 3 3 3h14c1.65 0 3-1.35 3-3v-26c0-1.65-1.35-3-3-3zM12 1.5h8v1h-8v-1zM16 30c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM24 24h-16v-20h16v20z"></path>
                    </svg>
    
                </div>
                <!-- Mobile Input Field -->
                <input type="text" name="mobile_no" value="<?php echo $row['mobile']; ?>" class="form-fields" placeholder="Mobile No" />
            </div><br/>
            <div class="form-group text-center text-danger">
               <i> <b>Note:</b><br/>Your can update your Age and Mobile No.</i>
             </div>
             <!-- Sign up Button -->
            <div class="form-group text-center">
                <input type="button" value="Update Profile" id="update" class="signup-btn btn" />
            </div>
            </form>
            

             <!-- Footer -->
             <footer class="text-center">Designed by <b>Sri Hari Harran</b></footer>
            </div>
        </div>
        <script type="text/javascript">
            $('#update').click(function()
            {
                //Ajax call to update data in DB
                $.ajax({
                    url:"update_profile.php",
                    method:"POST",
                    data:$('#form').serialize(),
                    success:function(result){
                        //Ajax call to generate json file
                        $.ajax({
                            url:"generate_json.php",
                            method:"POST",
                            success:function(result1){
                                alert(result);
                                location.reload();
                            }
                        });
                       
                    }
                });
            });
            $('#logout').click(function()
            {
                //Logout
                $.ajax({
                url:"logout.php",
                method:"POST",
                data:$('#form').serialize(),
                success:function(result){
                    if(result=="0")
                        location.replace("index.php");
                }
                });
                
            });
        </script>
       
    </body>
</html>
<?php
    }
    else
    {
        header("location:index.php");
    }
?>