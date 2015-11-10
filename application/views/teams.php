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
                            <li class="active"><a href="#"> Teams <span class="label label-danger"><?php echo count($morning)+count($evening); ?></span></a> </li>
                            <li><a href="<?php echo base_url(); ?>employee">Employees <span class="label label-default"><?php echo $employeeCount; ?></span></a></li>
                        </ul>
                        <!-- <button id="emp-submenu-add" class=" btn bgm-red btn-icon waves-effect waves-circle waves-float"><i class="md md-add"></i></button> -->
                    </div>
                </div>
            </section>
            <section id="content" class="emp-content">
                <div id="emp-list" >
                    <div class="emp-list-head-content ">
                        <div class="container">
                            <div class="col-xs-11">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="emp-list-head">AM</div>
                                    </div>
                                    <!-- <div class="col-xs-2 "> 
                                        <div class="emp-list-head emp-list-filter">
                                            <div class="fg-line">    
                                                <select class="selectpicker"  title='Branch'>
                                                    <option>POD</option>
                                                    <option>ECHO</option>
                                                    <option>ADMIN</option>
                                                    <option>IT</option>
                                                    <option>Verification</option>
                                                    <option>QA</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-xs-2 ">
                                        <div class="emp-list-head">Members</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="lv-body">
                        <div class="container">
                            <?php 
                                $temp = 0;
                                foreach($morning as $m){
                                    if($temp == $m['TeamID']){
                                        continue;
                                    }
                             ?>
                            <div class=" team-info"  href="<?php echo base_url(); ?>teams/view_team/<?php echo $m['TeamID']; ?>">
                                <div class="col-xs-11">
                                    <a href="<?php echo base_url(); ?>teams/view_team/<?php echo $m['TeamID']; ?>">
                                    <div class="row">
                                        <div class="col-xs-6 team-list-info team-list-team">
                                            <?php echo $m['TeamName']; ?> <span class="text-muted"><?php echo $m['TeamSchedule']; ?></span>
                                        </div>
                                        
                                        <div class=" col-xs-4 team-list-members">
                                            <ul class="list-inline">
                                                <?php
                                                foreach($employee as $e){
                                                    if($e['TeamID'] == $m['TeamID']){
                                                ?>
                                                    <li class="hidden-xs">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $e['EmpLastName'].", ".$e['EmpFirstName']; ?>">
                                                            <img class="lv-img-sm img-circle" src="<?php echo base_url(); ?>img/profile-pics/<?php echo $e['EmpProfilePic']; ?>" alt="" ></a>
                                                    </li>

                                                <?php }} ?>
                                            </ul>
                                        </div> 
                                    </div>
                                    </a>
                                </div>
                                <!-- <div class="col-xs-1 team-list-action text-right">
                                    <div class="dropdown ">
                                        <a href="#" class="text-right dropdown-toggle btn btn-link waves-effect" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url(); ?>img/more-icon.png" width="30" /></a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>teams/view_team"><i class="md md-search"></i> &emsp;View</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>teams/view_team"><i class="md md-mode-edit"></i>&emsp; Edit</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="md md-delete"></i>&emsp; Delete</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <?php $temp = $m['TeamID']; ?>
                            <?php } ?>
                        </div>
                    </div>

                    
                    <div class="emp-list-head-content ">
                        <div class="container">
                            <div class="col-xs-4">
                                <div class="emp-list-head">PM</div>
                            </div>
                        </div>
                     </div>
                     <div class="lv-body">
                        <div class="container">
                            <?php 
                                $temp = 0;
                                foreach($evening as $e){
                                    if($temp == $e['TeamID']){
                                        continue;
                                    }
                             ?>
                            <div class=" team-info"  href="<?php echo base_url(); ?>teams/view_team/<?php echo $e['TeamID']; ?>">
                                <div class="col-xs-11">
                                    <a href="<?php echo base_url(); ?>teams/view_team/<?php echo $e['TeamID']; ?>">
                                    <div class="row">
                                        <div class="col-xs-6 team-list-info team-list-team">
                                             <?php echo $e['TeamName'] ?> <span class="text-muted"><?php echo $e['TeamSchedule']; ?></span>
                                        </div>  
                                        <div class=" col-xs-4 team-list-members">
                                            <ul class="list-inline">
                                                <?php
                                                foreach($employee as $z){ 
                                                    if($z['TeamID'] == $e['TeamID']){
                                                ?>
                                                    <li class="hidden-xs">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $z['EmpLastName'].", ".$z['EmpFirstName']; ?>">
                                                            <img class="lv-img-sm img-circle" src="<?php echo base_url(); ?>img/profile-pics/<?php echo $z['EmpProfilePic']; ?>" alt="" ></a>
                                                    </li>

                                                <?php }} ?>
                                                <!-- <li>
                                                    <a href="#" class="blank-prof"  data-toggle="tooltip" data-placement="top" title="" data-original-title="aw"><img class="lv-img-sm img-circle" src="<?php echo base_url(); ?>img/profile-pics/blank.png" alt="">
                                                        <span class="more-num">+16</span>
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </div> 
                                    </div>
                                    </a>
                                </div>
                                <!-- <div class="col-xs-1 team-list-action text-right">
                                    <div class="dropdown ">
                                        <a href="#" class="text-right dropdown-toggle btn btn-link waves-effect" data-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url(); ?>img/more-icon.png" width="30" /></a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>teams/view_team"><i class="md md-search"></i> &emsp;View</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>teams/view_team"><i class="md md-mode-edit"></i>&emsp; Edit</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="md md-delete"></i>&emsp; Delete</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <?php $temp = $e['TeamID']; ?>
                            <?php } ?>
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
        <div id="add-team" class="at-modal-hide">
            <div class="emp-add-head">
                <section id="emp-submenub">
                    <div class="container">
                            <ul class="list-inline ">
                                <li class="active"> <a href="#" class="at-hide"><img src="<?php echo base_url(); ?>img/arl.png" width="30"></a> </li>
                                <li><p>New Team</p></li>
                            </ul>   
                    </div>
                </section>
            </div>
            <div class="emp-add-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 emp-add-name">
                            <h4>Create New Team</h4>

                            <div>

                            <!-- team name -->
                            <div class="emp-add-time">
                            <div class="form-group fg-float">
                                <div class="fg-line">
                                    <input type="text" class="form-control fg-input" name="TeamName">
                                </div>
                                <label class="fg-label">Team Name</label>
                            </div>
                            </div>
                            <!-- branch name -->
                            <div class="emp-list-head emp-list-filter">
                                <div class="fg-line">    
                                    <select class="selectpicker bs-select-hidden" title="Branch">
                                        <option class="bs-title-option" value="">Branch</option>
                                        <option>POD</option>
                                        <option>ECHO</option>
                                        <option>ADMIN</option>
                                        <option>IT</option>
                                        <option>Verification</option>
                                        <option>QA</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Schedule-->
                            <div class="emp-list-head emp-list-filter">
                                <div class="fg-line">    
                                    <select class="selectpicker bs-select-hidden" title="Branch"><option class="bs-title-option" value="">Schedule</option>
                                        <option>Morning</option>
                                        <option>Afternoon</option>
                                        <option>Evening</option>
                                    </select>
                                </div>
                            </div>
                             <!-- Time In -->
                            <div class="col-md-6 emp-add-time">
                                    <div class="form-group fg-float  ">
                                        <div class="fg-line">
                                            <input type="text" class="form-control fg-input">
                                        </div>
                                        <label class="fg-label">Time In</label>
                                    </div>
                                     <!-- Time Out -->

                            </div>
                             <div class="col-md-6 emp-add-time">
                                 <!-- Time Out -->
                                <div class="form-group fg-float ">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input">
                                    </div>
                                    <label class="fg-label">Time Out</label>
                                </div>
                             </div>
                             <!-- From -->
                            <div class="  col-md-6">
                                 <div class="form-group fg-float  ">
                                   <div class="fg-line">    
                                        <select class="selectpicker bs-select-hidden" title="Branch"><option class="bs-title-option" value="">From</option>
                                            <option>Monday</option>
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                            <option>Saturday</option>
                                            <option>Sunday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <!-- To -->
                            <div class=" col-md-6">
                                <div class="fg-line">    
                                    <select class="selectpicker bs-select-hidden" title="Branch"><option class="bs-title-option" value="">TO</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                             <!-- Time In -->
                            <h4>Swing Shift</h4>
                            <div class="emp-add-time">
                                    <div class="form-group fg-float  ">
                                        <div class="fg-line">
                                            <input type="text" class="form-control fg-input">
                                        </div>
                                        <label class="fg-label">Time In</label>
                                    </div>
                            </div>
                             <div class=" emp-add-time">
                                 <!-- Time Out -->
                                <div class="form-group fg-float ">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input">
                                    </div>
                                    <label class="fg-label">Time Out</label>
                                </div>
                             </div>
                             <!-- From -->
                            <div class="">
                                 <div class="form-group fg-float  ">
                                   <div class="fg-line">    
                                        <select class="selectpicker bs-select-hidden" title="Branch"><option class="bs-title-option" value="">Swing Shift day</option>
                                            <option>Monday</option>
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                            <option>Saturday</option>
                                            <option>Sunday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <h4>Team Members  <span class="at-count">0</span></h4>
                            <div class=" col-xs-4 add-team-emp">
                                <ul class="list-inline">
                                    <li>
                                        <a data-toggle="modal" href="#modal-add-team-emp" class="add-emp-img blank-prof" ><img class="lv-img-sm img-circle " src="<?php echo base_url(); ?>img/profile-pics/add.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="m-t-25">
                        <button class="btn btn-green btn-flat waves-effect">Add New Employee</button>
                        <button class="add-team-modal-btn btn btn-danger btn-flat waves-effect">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Default -->  
        <div class="modal fade " id="modal-add-team-emp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Team Members</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <select class="tag-select" multiple data-placeholder="Choose a Country...">
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                </select>
                        </div>
                        <div class="checkbox m-b-15">
                            <div class="row">
                                <div class="col-xs-1 madte-checkbox">
                                    <label>
                                        <input type="checkbox" id="tm-1" value="">
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="col-xs-11 madte-details">
                                    <label for="tm-1">
                                        <div class="madte-media">
                                             <div class="madte-img pull-left">
                                                <img class="img-circle" src="<?php echo base_url(); ?>img/contacts/3.jpg" width="40" alt="">
                                            </div>
                                            <div class="madte-info media-body">
                                                 <div class="madte-name">Pretty Patty</div>
                                                <small class="madte-title">IT Manager</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox m-b-15">
                            <div class="row">
                                <div class="col-xs-1 madte-checkbox">
                                    <label>
                                        <input type="checkbox" id="tm-2" value="">
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="col-xs-11 madte-details">
                                    <label for="tm-2">
                                        <div class="madte-media">
                                             <div class="madte-img pull-left">
                                                <img class="img-circle" src="<?php echo base_url(); ?>img/profile-pics/1.jpg" width="40" alt="">
                                            </div>
                                            <div class="madte-info media-body">
                                                 <div class="madte-name">Betty Banette</div>
                                                <small class="madte-title">Verification Admin</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox m-b-15">
                            <div class="row">
                                <div class="col-xs-1 madte-checkbox">
                                    <label>
                                        <input type="checkbox" id="tm-3" value="">
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                                <div class="col-xs-11 madte-details">
                                    <label for="tm-3">
                                        <div class="madte-media">
                                             <div class="madte-img pull-left">
                                                <img class="img-circle" src="<?php echo base_url(); ?>img/profile-pics/2.jpg" width="40" alt="">
                                            </div>
                                            <div class="madte-info media-body">
                                                 <div class="madte-name">Sir. Joel Shovel</div>
                                                <small class="madte-title">C4C(a) Manager</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link ">Save Changes</button>
                        <button type="button" class="btn btn-link " data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
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
            $("#emp-submenu-add ").click(function(){
                $("#add-team").removeClass("at-modal-hide");
            });
             $(".at-hide, .add-team-modal-btn").click(function(){
                $("#add-team").addClass("at-modal-hide");
            });
        });

        </script>
    
    </body>
</html>