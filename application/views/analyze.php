    
    <body id="team-body" oncontextmenu="return false;">
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
                   <a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>img/timekeeper-logo.png" width="20">&nbsp; Wed, Sept 16</a>
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
                            <li><a href="<?php echo base_url(); ?>teams"> Teams <span class="label label-default"><?php echo $teamCount; ?></span></a> </li>
                            <li><a href="<?php echo base_url(); ?>employee">Employees <span class="label label-default"><?php echo $employeeCount; ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </section>


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
                if(isset($error) || isset($success)){
            ?>
                <script type="text/javascript">
                function leave() {
                  window.location = "<?php echo base_url(); ?>teams/sync";
                }
                setTimeout("leave()", 2000);
                </script>
            <?php } ?>

            <form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>teams/sync">
                <div class="emp-add-body" style="background-color:white;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 emp-add-name">
                                <h4>Analysis for biometric file</h4>
                                <div>
                                    <div class="clearfix"></div>
                                        <!-- <div class="col-xs-2  text-center">
                                            <div class="emp-list-head upload-btn-holder">
                                                <label for="team-upload-file" class="upload-btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Upload biometric file">
                                                    <span><img src="<?php echo base_url(); ?>img/upload-icon.png"  class="img-responsive btn-circle"></span> 
                                                </label>
                                                <a style="float:right;">Upload file</a>
                                                    <input type="file" name="BioFile" id="team-upload-file" class="hide">
                                            </div>
                                        </div> -->
                                        <input type="file" name="imagefile" />
                                    </div>
 
                                    <div class=" emp-add-time">
                                        <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="md md-event"></i></span>
                                            <div class="dtp-container dropdown fg-line">
                                                <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="FROM" name="DateFrom" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" emp-add-time">
                                        <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="md md-event"></i></span>
                                            <div class="dtp-container dropdown fg-line">
                                                <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="TO" name="DateTo" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-green btn-flat waves-effect" value="Submit">Analyze</button>

                                    </div><br><br>
                                       
                                </div>
                                
                                <!-- <div class="whirly-loader">
                                      Loading…
                                    </div><br><br><br><br>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div id="viewimage"></div>

            
        
        
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
        <script src="<?php echo base_url(); ?>js/jquery.form.js"></script>
    
    </body>
</html>