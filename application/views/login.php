<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <meta name="description" content="Exxperts Timekeeper - Timekeeping System">
        <meta name="author" content="Mark Soliver">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico.png" type="image/png">
        <!-- Vendor CSS -->
        <link href="<?php echo base_url(); ?>vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>vendors/bower_components/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="<?php echo base_url(); ?>css/app.min.1.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/app.min.2.css" rel="stylesheet">
         <link href="<?php echo base_url(); ?>css/design.css" rel="stylesheet">
    </head>
    
    <body class="login-content">
        <section id="login-section">
            <div class="login-bg">
                <div class="container">
                    <div class="login-head">
                        <a href="<?php echo base_url(); ?>login">
                            <img src="<?php echo base_url(); ?>img/logo.png" width="130">
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                    <div class="col-sm-offset-4 col-sm-4">
                        <div class="login-box">
                            <!-- Login -->
                            <div class="lc-block toggled" id="l-login">
                                <div class="text-center">
                                    <img src="<?php echo base_url(); ?>img/ico.png"  width="100">
                                    <p>Exxpert Coorporation<br> <strong>Timekeeper Login</strong></p>
                                </div><br>
                                <div class="form-group fg-float m-b-20">
                                    <div class="fg-line">
                                        <input type="text" class="input-sm form-control fg-input">
                                    </div>
                                    <label class="fg-label">Username</label>
                                </div><br>
                                <div class="form-group fg-float m-b-20">
                                    <div class="fg-line">
                                        <input type="password" class="input-sm form-control fg-input">
                                    </div>
                                    <label class="fg-label">Password</label>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="checkbox hide">
                                    <label>
                                        <input type="checkbox" value="">
                                        <i class="input-helper"></i>
                                        Keep me signed in
                                    </label>
                                </div>
                                <div class="clearfix text-center">
                                    <a href="teams" class="btn btn-login btn-danger btn-float btn bgm-red  waves-effect waves-circle waves-float waves-effect waves-circle waves-float">
                                        <i class="md md-arrow-forward"></i>
                                    </a>
                                </div>
                                <ul class="login-navigation hide">
                                    <li data-block="#l-register" class="bgm-red">Register</li>
                                    <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
                                </ul>
                            </div>
                            
                            <!-- Register -->
                            <div class="lc-block" id="l-register">
                                <div class="input-group m-b-10">
                                    <span class="input-group-addon"><i class="md md-person"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                
                                <div class="input-group m-b-20">
                                    <span class="input-group-addon"><i class="md md-mail"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                
                                <div class="input-group m-b-20">
                                    <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                                    <div class="fg-line">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <i class="input-helper"></i>
                                        Accept the license agreement
                                    </label>
                                </div>
                                
                                <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>
                                
                                <ul class="login-navigation">
                                    <li data-block="#l-login" class="bgm-green">Login</li>
                                    <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
                                </ul>
                            </div>
                            
                            <!-- Forgot Password -->
                            <div class="lc-block" id="l-forget-password">
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
                                
                                <div class="input-group m-b-20">
                                    <span class="input-group-addon"><i class="md md-email"></i></span>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                
                                <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>
                                
                                <ul class="login-navigation">
                                    <li data-block="#l-login" class="bgm-green">Login</li>
                                    <li data-block="#l-register" class="bgm-red">Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>   
        <script src="<?php echo base_url(); ?>vendors/bower_components/Waves/dist/waves.min.js"></script>   
        <script src="<?php echo base_url(); ?>js/functions.js"></script>
        
    </body>
</html>