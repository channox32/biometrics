    <body id="team-body">
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
                <li class="c-date">
                   <a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>img/timekeeper-logo.png" width="20">&nbsp;</a>
                </li>
                <li id="l-user" class="logo dropdown  hidden-xs pull-right">
                    <a data-toggle="dropdown"  href="<?php echo base_url(); ?>login">Sebastian Michaelis <i class="md md-keyboard-arrow-down"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li>
                            <a data-action="fullscreen" href=""><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a href=""><i class="md md-settings"></i>Settings</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>login"><i class="md md-exit-to-app"></i> Logout</a>
                        </li>
                    </ul>
                </li>

                <li class="pull-right">
                    <ul class="top-menu">
                        <li id="top-search">
                            <a class="tm-search" href=""></a>
                        </li>
                        <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-notification" href="#"><i class="tmn-counts">9</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification
                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="md md-done-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body c-overflow">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    
                                <a class="lv-footer" href="">View Previous</a>
                            </div>
                    
                        </div>
                    </li>
                    </ul>

                </li>

            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <div class="profile-menu ">
                        <a href="">
                            <div class="profile-pic">
                                <div class="pp">
                                <img src="<?php echo base_url(); ?>img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="pp-info">
                                    <span class="pp-name">Sebastian Michaelis</span>
                                    <span class="pp-title">ADMIN</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <ul class="main-menu">

                        <li class="active"><a href="#"><i class="md md-home"></i>Home</a></li>
                        <li><a href="#"><i class="md md-content-paste"></i>Logs</a></li>
                        <li><a href="#"><i class="md md-list"></i>List of Employees</a></li>

                        <li class="sub-menu hide">
                            <a href=""><i class="md md-now-widgets"></i> Widgets</a>

                            <ul>
                                <li><a href="#">Templates</a></li>
                                <li><a class="active" href="#">Widgets</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu hide">
                            <a href=""><i class="md md-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="#">Normal Tables</a></li>
                                <li><a href="#">Data Tables</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="et-page" class="hide">
                <div class="container">
                    <ul class="list-inline">
                        <li class="et-page-logo">
                            <a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>img/timekeeper-logo.png" width="50"></a>
                        </li>
                        <li class="et-d-page">
                            <a href="#TimekeepHome">Home</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="emp-submenu">
                <div class="container">
                    <div>
                        <ul class="list-inline">
                            <li ><a href="<?php echo base_url(); ?>teams"> Teams <span class="label label-default"><?php echo $team; ?></span></a> </li>
                            <li class="active"><a href="#">Employees <span class="label label-danger"><?php echo count($employee)+count($employeeNG);?></span></a></li>
                        </ul>
                        <button id="emp-submenu-add" class=" btn bgm-red btn-icon waves-effect waves-circle waves-float"><i class="md md-add"></i></button>
                    </div>
                </div>
            </section>

            <!-- NOTIFICATIONS -->
            <?php if(isset($error)){ ?>
            <div class="alert alert-danger">
                <strong>[ E R R O R ] </strong> <?php echo $error; ?>
            </div>
            <?php } ?>
        <?php if(isset($success)){ ?>
            <div class="alert alert-success">
                <strong>[ N O T E ]</strong> <?php echo $success; ?>
            </div>
            <?php } ?>




            <?php 
                if(count($employeeNG) > 0){
            ?>
            <section id="content" class="emp-content">
                <div id="emp-list" >
                    <div class="emp-list-head-content ">
                        <div class="container">
                            <div class="col-xs-11">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="emp-list-head" style="color:red; font-weight:bold;">Employee(s) without group</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="lv-body">
                        <div class="container">
                            <?php
                                foreach($employeeNG as $ng){
                            ?>
                            <div class=" team-info"  href="<?php echo base_url(); ?>profile/index/<?php echo $ng['EmpID']; ?>">
                                <div class="col-xs-12">
                                    <a href="<?php echo base_url(); ?>profile/index/<?php echo $ng['EmpID']; ?>">
                                    <div class="row ">
                                        <div class="emp-list-prof col-xs-4 team-list-members">
                                            <ul class="list-inline">
                                                <li class="hidden-xs">
                                                    <img class="lv-img-sm img-circle" src="<?php echo base_url(); ?>img/profile-pics/<?php echo $ng['EmpProfilePic']; ?>" alt="" >
                                                </li>
                                                <li class="emp-list-name"> <?php echo $ng['EmpLastName']; ?><span>, <?php echo $ng['EmpFirstName']; ?> <?php echo $ng['EmpMiddleName']; ?><span></li>
                                            </ul>
                                        </div> 
                                        <div class="col-xs-4 team-list-info">
                                            <a style="font-weight:bold; font-family:'Courier New', Courier, monospace; font-size:16px;">
                                                <?php 
                                                if($ng['EmpID']<10){
                                                    echo "0000000";
                                                }else if($ng['EmpID']<100){
                                                    echo "000000";
                                                }else if($ng['EmpID']<1000){
                                                    echo "00000";
                                                }else if($ng['EmpID']<10000){
                                                    echo "0000";
                                                }else if($ng['EmpID']<100000){
                                                    echo "000";
                                                }else if($ng['EmpID']<1000000){
                                                    echo "00";
                                                }else if($ng['EmpID']<10000000){
                                                    echo "0";
                                                }
                                                echo $ng['EmpID']; 
                                            ?>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>


            <section id="content" class="emp-content">
                <div id="emp-list" >
                    <div class="emp-list-head-content ">
                        <div class="container">
                            <div class="col-xs-11">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="emp-list-head">Employees</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="lv-body">
                        <div class="container">
                            <?php  
                                foreach($employee as $emp){
                            ?>
                            <div class=" team-info"  href="<?php echo base_url(); ?>profile/index/<?php echo $emp['EmpID']; ?>">
                                <div class="col-xs-12">
                                    <a href="<?php echo base_url(); ?>profile/index/<?php echo $emp['EmpID']; ?>">
                                    <div class="row ">
                                        <div class="emp-list-prof col-xs-4 team-list-members">
                                            <ul class="list-inline">
                                                <li class="hidden-xs">
                                                    <img class="lv-img-sm img-circle" src="<?php echo base_url(); ?>img/profile-pics/<?php echo $emp['EmpProfilePic']; ?>" alt="" >
                                                </li>
                                                <li class="emp-list-name"> <?php echo $emp['EmpLastName']; ?><span>, <?php echo $emp['EmpFirstName']; ?> <?php echo $emp['EmpMiddleName']; ?><span></li>
                                            </ul>
                                        </div> 
                                        <div class="col-xs-4 team-list-info">
                                            <a style="font-weight:bold; font-family:'Courier New', Courier, monospace; font-size:16px;"><?php 
                                                echo $emp['TeamName'];
                                            ?></a>
                                        </div>
                                        <div class="col-xs-4 team-list-info">
                                            <?php 
                                                if($emp['EmpID']<10){
                                                    echo "0000000";
                                                }else if($emp['EmpID']<100){
                                                    echo "000000";
                                                }else if($emp['EmpID']<1000){
                                                    echo "00000";
                                                }else if($emp['EmpID']<10000){
                                                    echo "0000";
                                                }else if($emp['EmpID']<100000){
                                                    echo "000";
                                                }else if($emp['EmpID']<1000000){
                                                    echo "00";
                                                }else if($emp['EmpID']<10000000){
                                                    echo "0";
                                                }
                                                echo $emp['EmpID']; 
                                            ?>
                                        </div>
                                        
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <?php 
                                }
                             ?>
                        </div>
                    </div>
                    <div class="container hide">
                        <ul class="pagination lv-pagination">
                            <li class="pull-left">Showing 10 of 30</li>
                            <li>
                                <a href="" aria-label="Previous">
                                    <i class="md md-chevron-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li>
                                <a href="" aria-label="Next">
                                    <i class="md md-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <form method="POST" action="<?php echo base_url();?>employee/add" enctype="multipart/form-data">
            <div id="add-team" class="at-modal-hide">
                <div class="emp-add-head">
                    <section id="emp-submenub">
                        <div class="container">
                                <ul class="list-inline ">
                                    <li class="active"> <a href="#" class="at-hide"><img src="<?php echo base_url(); ?>img/arl.png" width="30"></a> </li>
                                    <li><p>Add Employee</p></li>
                                </ul>   
                        </div>
                    </section>
                </div>
                <div class="emp-add-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 emp-add-upload-img">
                                 <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                    <div class='text-center'>
                                        <span class="btn btn-green btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="EmpProfilePic" required>
                                        </span>
                                        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 emp-add-name">
                                <h4>Add Employee Details</h4>

                                <div>
                                    <div class=" emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="text" class="form-control fg-input" name="EmpID" required>
                                            </div>
                                            <label class="fg-label">EmpID</label>
                                        </div>
                                    </div>
                                    <!-- team name -->
                                    <div class="col-md-4 emp-add-time">
                                        <div class="form-group fg-float  ">
                                            <div class="fg-line">
                                                <input type="text" class="form-control fg-input" name="EmpFirstName" required>
                                            </div>
                                            <label class="fg-label">First Name</label>
                                        </div>
                                    </div>
                                     <div class="col-md-4 emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="text" class="form-control fg-input" name="EmpMiddleName" required>
                                            </div>
                                            <label class="fg-label">Middle Name</label>
                                        </div>
                                     </div>
                                    <div class="col-md-4 emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="text" class="form-control fg-input" name="EmpLastName" required>
                                            </div>
                                            <label class="fg-label">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- Gender Name -->
                                    <div class="emp-list-head emp-list-filter">
                                        <div class="fg-line">    
                                            <select class="selectpicker bs-select-hidden" title="Branch" name="EmpGender">
                                                <option class="bs-title-option" value="">Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class=" emp-add-time">
                                        <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="md md-event"></i></span>
                                            <div class="dtp-container dropdown fg-line">
                                            <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="Birthdate" name="EmpBirthdate" required>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Civil Status-->
                                    <div class="emp-list-head emp-list-filter">
                                        <div class="fg-line">    
                                            <select class="selectpicker bs-select-hidden" title="Branch" name="EmpStatus" required>
                                                <option class="bs-title-option">Civil Status</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Devorce">Devorce</option>
                                                <option value="Separated">Separated</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="text" class="form-control fg-input" name="EmpContact" required>
                                            </div>
                                            <label class="fg-label">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class=" emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="Email" class="form-control fg-input" name="EmpEmail" required>
                                            </div>
                                            <label class="fg-label">Email</label>
                                        </div>
                                    </div>
                                    <!-- <h4>Account Details</h4>
                                    <div class=" emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="text" class="form-control fg-input">
                                            </div>
                                            <label class="fg-label">Username</label>
                                        </div>
                                    </div>
                                    <div class=" emp-add-time">
                                        <div class="form-group fg-float ">
                                            <div class="fg-line">
                                                <input type="password" class="form-control fg-input">
                                            </div>
                                            <label class="fg-label">Password</label>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- Submission Line-->
                                <div>
                                    <button class="btn btn-green btn-flat waves-effect">Add New Employee</button>
                                    <button class="add-team-modal-btn btn btn-danger btn-flat waves-effect at-hide">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url(); ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

        
        <script src="<?php echo base_url(); ?>vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/summernote/dist/summernote.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

        <script src="<?php echo base_url(); ?>vendors/chosen_v1.4.2/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/fileinput/fileinput.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/input-mask/input-mask.min.js"></script>
        <script src="<?php echo base_url(); ?>vendors/farbtastic/farbtastic.min.js"></script>
        
        <script src="<?php echo base_url(); ?>js/functions.js"></script>
        <script src="<?php echo base_url(); ?>js/demo.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
        <script >
        $(document).ready(function(){
            $("#emp-submenu-add").click(function(){
                $("#add-team").removeClass("at-modal-hide");
            });
             $(".at-hide, add-team-modal-btn").click(function(){
                $("#add-team").addClass("at-modal-hide");
            });


        });

        </script>
    
    
    </body>
</html>