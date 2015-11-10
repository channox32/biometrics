

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
                            <a href="" onclick="toggleFullScreen()"><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                            <!--<a data-action="fullscreen" href=""> -->
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
                                                <img class="lv-img-sm" src="<?php echo base_url();?>img/profile-pics/1.jpg" alt="">
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
                                                <img class="lv-img-sm" src="<?php echo base_url();?>img/profile-pics/2.jpg" alt="">
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
                                                <img class="lv-img-sm" src="<?php echo base_url();?>img/profile-pics/3.jpg" alt="">
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
                                                <img class="lv-img-sm" src="<?php echo base_url();?>img/profile-pics/4.jpg" alt="">
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
                                                <img class="lv-img-sm" src="<?php echo base_url();?>img/profile-pics/4.jpg" alt="">
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
        
            <?php 
                foreach($profile as $p){
             ?>
            <section id="profile-top">
                <div class="container">
                    <div class="profile-pic-content">
                         <div class="pull-left">
                            <img class="profile-img-sm" src="<?php echo base_url();?>img/profile-pics/<?php echo $p['EmpProfilePic']; ?>" alt="">
                        </div>
                        <div class="media-body">
                             <div class="profile-title"><?php echo $p['EmpLastName']; ?>, <?php echo $p['EmpFirstName']." ".$p['EmpMiddleName']; ?></div>
                            <small class="profile-small"><?php echo $p['EmpPosition']; ?>, <?php echo $p['TeamName']; ?></small>
                            <small class="profile-small">#<?php 
                            if($p['EmpID']<10){
                                echo "0000000";
                            }else if($p['EmpID']<100){
                                echo "000000";
                            }else if($p['EmpID']<1000){
                                echo "00000";
                            }else if($p['EmpID']<10000){
                                echo "0000";
                            }else if($p['EmpID']<100000){
                                echo "000";
                            }else if($p['EmpID']<1000000){
                                echo "00";
                            }else if($p['EmpID']<10000000){
                                echo "0";
                            }
                            echo $p['EmpID']; ?></small>
                        </div>
                    </div>

                   <!--  <button id="emp-submenu-add" class=" btn bgm-red btn-icon waves-effect waves-circle waves-float"><i class="md md-add"></i></button> -->
                </div>
            </section>
            <section id="profile-content">
                <div class="row">
                    <div class="col-sm-3 prof-info">
                        <ul class="list-unstyled">
                            <li><span>Branch</span> Admin (Morning) </li>
                            <li><span>Late</span> 2</li>
                            <li><span>Absent</span> 6</li>
                            <li><span>Leave Credits</span> 2</li>
                            <li><span>Undertime</span> 12:30 am</li>
                            <li><span>Overtime</span> Tuesday - Saturday</li>
                            <li><span>Swing Shift</span> Sat 8:00 pm - 1:00 am</li>
                        </ul>
                    </div>
                    <div class="prof-details hide">
                        <ul class="list-unstyled">
                            <li>
                                <i class="md md-person"></i> ID # <span >095526</span>
                            </li>
                            <li>
                                <i class="md md-data-usage"></i> Late <span >10</span>
                            </li>
                            <li>
                                <i class="md md-share"></i> OA Department <span >Line Leader</span>
                            </li>
                            <li>
                                <i class="md md-data-usage"></i> Leave C <span >10</span>
                            </li>
                            <li>
                                <i class="md md-data-usage"></i> Absences <span >10</span>
                            </li>
                             <li>
                                <i class="md md-data-usage"></i> Leave <span >10</span>
                            </li>
                            <li>
                                <i class="md md-data-usage"></i> Leave credits <span >10</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 prof-timeline">
                       <div class="card-body card-padding">
                            <div role="tabpanel">
                                <ul class="tab-nav" role="tablist">
                                    <li class="active"><a href="#user-logs" aria-controls="user-logs"  role="tab" data-toggle="tab">Logs</a></li>
                                    <li >
                                        <a href="#user-about" aria-controls="settings11" role="tab" data-toggle="tab">About</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="user-logs" class="tab-pane fade in active prof-user-record">
                                        <div class="vt-month">
                                           <div class="col-xs-3 team-list-info ">
                                                September
                                            </div>
                                            <div class="col-xs-2 team-list-info">
                                              Time in
                                            </div>
                                            <div class="col-xs-2 team-list-info">
                                                Time out
                                            </div>
                                            <div class="col-xs-2 team-list-info">
                                                Time in
                                            </div>
                                            <div class="col-xs-2 team-list-info">
                                               Time out
                                            </div>
                                        
                                            <div class="clearfix"></div>
                                            <div class="lv-body">
                                                <div class="prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/21/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/22/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/23/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/24/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>
                                                         <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vt-month">
                                           <div class="col-xs-3 team-list-info ">
                                               August
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="lv-body">
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/21/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/22/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/23/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/24/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>
                                                         <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vt-month">
                                           <div class="col-xs-3 team-list-info ">
                                               August
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="lv-body">
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/21/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/22/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/23/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                                <div class=" prof-logs">
                                                        <div class="col-xs-3 team-list-info team-list-team">
                                                            08/24/2015
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>
                                                         <div class="col-xs-2 team-list-info">
                                                           7:00 AM
                                                        </div>
                                                        <div class="col-xs-2 team-list-info">
                                                           5:00 PM
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="user-about" class="tab-pane fade in  prof-user-record">
                                        <div class="vt-month">
                                           <div class="col-xs-3 team-list-info ">
                                                Personal Info
                                            </div>
                                            <div class="col-xs-3 text-right team-list-info pull-right">
                                                <a href="#"><i class="text-muted md md-settings"></i> </a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="lv-body">
                                                <div class="prof-logs">
                                                     <div class="col-xs-2 team-list-info">
                                                      <i class="md md-face-unlock"></i>&emsp; Full Name
                                                    </div>
                                                    <div class="col-xs-3 team-list-info team-list-team">
                                                        Pretty Patty
                                                    </div>
                                                </div>
                                                <div class="prof-logs">
                                                     <div class="col-xs-2 team-list-info">
                                                     <i class="md md-account-circle"></i>&emsp; Gender
                                                    </div>
                                                    <div class="col-xs-3 team-list-info team-list-team">
                                                        Female
                                                    </div>
                                                </div>
                                                <div class="prof-logs">
                                                     <div class="col-xs-2 team-list-info">
                                                      <i class="md md-email"></i>&emsp; Email
                                                    </div>
                                                    <div class="col-xs-3 team-list-info team-list-team">
                                                        patty_pretty@gmail.com
                                                    </div>
                                                </div>
                                                <div class="prof-logs">
                                                     <div class="col-xs-2 team-list-info">
                                                      <i class="md md-phone"></i>&emsp; Contact 
                                                    </div>
                                                    <div class="col-xs-3 team-list-info team-list-team">
                                                        0954 325 4625
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
        </section>


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
        <script>
            var myVar = setInterval(function(){myTimer()},1000);
            function myTimer() {
                var d = new Date();
                document.getElementById("demo").innerHTML = d.toLocaleTimeString();
            }
        </script>
    
    </body>
</html>