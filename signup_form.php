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
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
        
        <div class="main">
            <div class="form">
            <!-- Heading -->
            <div class="text-center" >
                <h3><i>Sign Up</i></h3>
            </div>
             <!-- Signup Form -->
            <form id="form">
            <div class="form-group">
                <!-- Firstname Icon -->
                <div class="img">
                    <?xml version="1.0" encoding="iso-8859-1"?>
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
                <input type="text" name="fname" class="form-fields" placeholder="First Name" />
            </div>
            <br/>
            <div class="form-group">
                <!-- Lastname Icon -->
                <div class="img">
                    <?xml version="1.0" encoding="iso-8859-1"?>
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
                <input type="text" name="lname" class="form-fields" placeholder="Last Name" />
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
                    <option value="Nil">---SELECT YOUR GENDER---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
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
                <input type="text" name="dob" class="form-fields" onfocus="(this.type='date')" placeholder="Date of Birth" />
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
                <input type="number" name="age" class="form-fields"  placeholder="Age" />
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
                <input type="email" name="email" class="form-fields" placeholder="Email" />
            </div><br/>
            <div class="form-group">
                <!-- Passwprd Icon -->
                <div class="img">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 511.962 511.962" style="enable-background:new 0 0 511.962 511.962;" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M506.722,132.208l-56.32-54.357l23.467-24.32c9.104-9.131,10.362-23.471,2.987-34.048
                                    c-4.506-6.144-11.495-9.985-19.097-10.495c-7.602-0.51-15.041,2.363-20.327,7.849L220.429,241.52l12.203,11.861l12.715,12.288
                                    l12.288,11.861l96.597-100.011l56.235,54.272c3.269,3.193,7.68,4.945,12.249,4.865s8.916-1.986,12.071-5.291l12.032-12.459
                                    c3.18-3.276,4.923-7.684,4.843-12.249s-1.977-8.909-5.27-12.071l-6.315-6.144l24.32-25.173l6.315,6.144
                                    c3.295,3.168,7.719,4.888,12.288,4.779c4.558,0.006,8.915-1.879,12.032-5.205l12.117-12.459
                                    C513.73,149.688,513.539,138.813,506.722,132.208z M445.367,133.061l-36.181,37.461c-1.553,1.641-3.714,2.567-5.973,2.56h-0.171
                                    c-2.201,0.013-4.318-0.846-5.888-2.389l-25.003-24.064c-3.375-3.307-3.451-8.717-0.171-12.117l36.181-37.461
                                    c1.553-1.641,3.714-2.567,5.973-2.56c2.259-0.054,4.445,0.807,6.059,2.389l24.917,24.064
                                    C448.51,124.227,448.624,129.637,445.367,133.061z"/>
                                <path d="M221.623,314.736l-12.288-11.861l-12.629-12.203l-12.288-11.861l-14.336,14.848
                                    c-50.554-30.03-115.703-16.097-149.553,31.983C-13.32,373.722-4.466,439.754,40.853,477.22
                                    c45.319,37.466,111.838,33.744,152.695-8.542c36.455-37.488,42.155-95.198,13.739-139.094L221.623,314.736z M168.631,444.613
                                    c-14.331,14.899-34.028,23.442-54.699,23.723h-1.451c-36.964-0.106-68.749-26.211-76.036-62.45
                                    c-7.287-36.239,11.936-72.601,45.986-86.987s73.522-2.822,94.425,27.664C197.761,377.05,194.322,418.036,168.631,444.613z
                                    M177.335,310.64c0,0.023-0.008,0.045-0.024,0.061c0,0,0,0,0,0C177.327,310.685,177.336,310.663,177.335,310.64z
                                    M176.567,311.323c0.265-0.152,0.497-0.355,0.683-0.597c0.014,0,0.025-0.009,0.037-0.015c-0.012,0.006-0.023,0.015-0.037,0.015
                                    C177.065,310.968,176.833,311.171,176.567,311.323l-0.085,0.085c-0.395,0.305-0.825,0.563-1.28,0.768
                                    c-1.254,0.67-2.656,0.991-4.061,0.941c1.405,0.049,2.806-0.271,4.061-0.941c0.455-0.205,0.885-0.463,1.28-0.768l0,0
                                    L176.567,311.323z M38.74,330.295c31.272-38.47,86.802-46.568,127.758-18.631c0.519,0.365,1.09,0.65,1.693,0.848
                                    c0.003,0.001,0.006,0.003,0.01,0.004c-0.607-0.198-1.181-0.484-1.702-0.852C125.542,283.727,70.012,291.825,38.74,330.295
                                    c-14.659,18.033-21.695,39.921-21.357,61.629C17.044,370.216,24.081,348.328,38.74,330.295z M208.12,391.972
                                    c0.331-20.273-5.775-40.764-18.667-58.206c0.002,0.003,0.004,0.005,0.005,0.007C202.347,351.214,208.45,371.702,208.12,391.972z"
                                    />
                                <path d="M239.629,283.845l-24.491-23.637l-0.853-0.853l-12.288-11.861c-1.605-1.595-3.797-2.459-6.059-2.389
                                    c-2.282,0.08-4.449,1.025-6.059,2.645c-1.788,1.677-2.78,4.034-2.731,6.485c0.026,2.252,0.947,4.401,2.56,5.973l12.373,11.947
                                    l0.597,0.512l24.661,23.893l12.715,12.203c1.617,1.576,3.794,2.443,6.051,2.411c2.257-0.032,4.409-0.961,5.981-2.582
                                    c1.809-1.67,2.831-4.024,2.816-6.485c0.007-2.259-0.919-4.421-2.56-5.973L239.629,283.845z"/>
                            </g>
                    </g>
                    </g>
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
                </svg>
                </div>
                <!-- Password Input Field -->
                <input type="password" name="password" class="form-fields" placeholder="Password" />
            </div><br/>
            <div class="form-group">
                <!-- Mobile Icon -->
                <div class="img">
                    
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    
                    <path d="M23 0h-14c-1.65 0-3 1.35-3 3v26c0 1.65 1.35 3 3 3h14c1.65 0 3-1.35 3-3v-26c0-1.65-1.35-3-3-3zM12 1.5h8v1h-8v-1zM16 30c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM24 24h-16v-20h16v20z"></path>
                    </svg>
    
                </div>
                <!-- Mobile Input Field -->
                <input type="text" name="mobile_no" class="form-fields" placeholder="Mobile No" />
            </div><br/>
            <div class="form-group text-center text-danger">
               <i> <b>Note:</b>Your username is your Email ID.</i>
             </div>
             <!-- Sign up Button -->
            <div class="form-group text-center">
                <input type="button" value="Sign up" id="signup" class="signup-btn btn" />
            </div>
            </form>
            <!-- Login Form Link -->
            <div class="text-center">
                <b class="text-success"><a href="index.php">Login</a></b>
            </div><br/>
             <!-- Footer -->
             <footer class="text-center">Designed by <b>Sri Hari Harran</b></footer>
            </div>
        </div>
        <script type="text/javascript">
            $('#signup').click(function()
            {
                //Ajax call to store form data in DB
                $.ajax({
                    url:"signup.php",
                    method:"POST",
                    data:$('#form').serialize(),
                    success:function(result){
                        //Ajax call to generate json file
                         $.ajax({
                            url:"generate_json.php",
                            method:"POST",
                            success:function(result1){
                                alert(result);
                                $('#form')[0].reset();
                                location.replace("index.php");
                            }
                        });
                    }
                });
            });
        </script>
       
    </body>
</html>