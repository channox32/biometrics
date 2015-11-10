<body>
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
                   <a href="<?php echo base_url(); ?>login"> <img src="<?php echo base_url(); ?>img/timekeeper-logo.png" width="20">&nbsp;</a>
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
                <input type="text" placeholder="Search for team members">
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
                                    <a href="#TimekeepHome">
                                        <span class="team-name">Admin Team</span>
                                        <span class="team-dept">IT Department / M-F</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
            </section>

            <section id="emp-submenub">
                <div class="container">
                    
                    <div>
                        <ul class="list-inline ">
                            <li class="active"> <a href="<?php echo base_url(); ?>teams"><img src="<?php echo base_url(); ?>img/arl.png" width="30"></a> </li>
                            <li><p>
                            <?php 
                                foreach($teamInfo as $u){
                                    echo $u['TeamName'];
                                    echo " <span>".$u['TeamSchedule']."</span>";
                                    break;
                                }
                            ?>

                            </p>
                            </li>
                        </ul>   
                       
                        <button id="emp-submenu-addb" class=" btn bgm-red btn-icon waves-effect waves-circle waves-float"><i class="md md-edit"></i></button>
                    </div>
                </div>
            </section>
            <section id="view-team">
                <div class="container-fluid">
                    <div class="row">
                        <div class="vt-box col-sm-3 vt-info">
                            <ul class="list-unstyled">
                                <li class="vt-info-head">Team Info</li>

                                <?php 
                                    $c = 0;
                                    foreach($teamInfo as $t){
                                        if($c > 0){
                                            echo "<br> <br>";
                                        }
                                 ?>
                                <li><span>Time In</span><?php echo date ('h:i A',strtotime($t['TeamTimeIn']));  ?></li>
                                <li><span>Time Out</span><?php echo date ('h:i A',strtotime($t['TeamTimeOut'])); ?></li>
                                <li><span>Schedule</span>
                                <?php 
                                    $json = json_decode($t['TeamDate']);
                                    echo $json[0]." - ".$json[count($json)-1];
                                 ?>
                                 </li>
                                
                                
                                  
                                <?php $c++; } ?>  
                                <br>
                                <li><span>Swing Shift</span>
                                    <?php if($t['SwingDay'] == 'None'){
                                        echo "No Swing Shift";
                                    }else{ ?>
                                    <?php echo substr($t['SwingDay'], 0, 3) ?> 
                                    <?php echo date ('h:i A',strtotime($t['SwingIn'])); ?> - <?php echo date ('h:i A',strtotime($t['SwingOut'])); ?></li>
                                    <?php } ?>
                            </ul>
                        </div>
                       
                       
                        <div class=" col-sm-2   " style="padding:0;">
                            <div class="vt-box  vt-member">
                                 <ul class="list-unstyled">
                                    <li class="vt-member-head">Members <span class="vt-member-count"><?php echo count($employee); ?></span></li>
                                </ul>
                            </div>
                            <div class="vt-box vt-member">
                                <ul class="nav nav-tabs" >
                                    
                                    <?php
                                    $active = "active";
                                    foreach($employee as $e){ ?>
                                    <li style="width:100%;" class="<?php echo $active; ?>">
                                        <a href="#<?php echo $e['EmpID']; ?>" class="">
                                            <div class="pull-left hidden-xs">
                                                <img class="lv-img-sm img-circle img-responsive" src="<?php echo base_url(); ?>img/profile-pics/<?php echo $e['EmpProfilePic']; ?>" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title"><?php echo $e['EmpLastName'].", ".$e['EmpFirstName']; ?></div>
                                                <small class="lv-small"><?php echo $e['TeamMemberRank']; ?></small>
                                            </div>
                                        </a>
                                    </li>
                                    <?php 
                                        $active = "";
                                    } ?>

                                    <br><br>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content">

                        <?php 
                        $active = " in active";
                        foreach($employee as $f){ ?>
                        <div id="<?php echo $f['EmpID']; ?>" class="vt-box col-sm-7 tab-pane fade<?php echo $active; ?>">
                            <div class="vt-member-view">
                                <div class="pull-left hidden-xs">
                                    <img class="lv-img-sm img-circle img-responsive" src="<?php echo base_url(); ?>img/profile-pics/<?php echo $f['EmpProfilePic']; ?>" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lv-title"><a href="<?php echo base_url(); ?>profile/index/<?php echo $f['EmpID']; ?>"><?php echo $f['EmpLastName'].", ".$f['EmpFirstName']; ?></a></div>
                                    <small class="lv-small"><?php echo $e['TeamMemberRank']; ?></small>
                                    <small class="lv-small">#<?php 
                                                if($f['EmpID']<10){
                                                    echo "0000000";
                                                }else if($f['EmpID']<100){
                                                    echo "000000";
                                                }else if($f['EmpID']<1000){
                                                    echo "00000";
                                                }else if($f['EmpID']<10000){
                                                    echo "0000";
                                                }else if($f['EmpID']<100000){
                                                    echo "000";
                                                }else if($f['EmpID']<1000000){
                                                    echo "00";
                                                }else if($f['EmpID']<10000000){
                                                    echo "0";
                                                }
                                                echo $f['EmpID'];
                                        ?>
                                    </small>
                                </div>
                            </div>
                            <div class="vt-member-record">
                                <div class="vt-month" style="">
                                    <div class="col-xs-1 team-list-info" style="font-size:4; width:15%;">
                                        Time In
                                    </div>
                                    <div class="col-xs-1 team-list-info" style="font-size:4; width:15%;">
                                        Time Out
                                    </div>
                                    <div class="col-xs-1 team-list-info" style="font-size:4; width:13%;">
                                        Late Time
                                    </div>
                                    <div class="col-xs-2 team-list-info" style="font-size:4; width:13%;">
                                        Overtime
                                    </div>
                                    <div class="col-xs-1 team-list-info" style="font-size:4; width:13%;">
                                        Undertime
                                    </div>
                                    <div class="col-xs-1 team-list-info" style="font-size:4; width:13%;">
                                        Total Hours
                                    </div>
                                
                                    <div class="clearfix"></div>
                                    <div class="lv-body">
                                        <div class="prof-logs">
                                        <?php
                                        $count = 0;
                                        foreach($time as $z){
                                            if($z['EmpID'] == $f['EmpID']){
                                                if($count == 2){
                                                    $count = 0;
                                                    echo "<div class='col-xs-2 team-list-info'>";
                                                    echo "";
                                                    echo "</div>";
                                                    echo "</div><div class='prof-logs'>";
                                                }
                                        ?>
                                            <div class="col-xs-2 team-list-info" style="font-size:13px; width:15%; color:black;">
                                               <div style="font-size:9px; width:36px; float:left;"><?php echo date("M d", strtotime($z['TimeTrackerDate'])); ?></div>
                                               <span style="font-weight:bold; font-size:14px;"><?php echo substr($z['TimeTrackerTime'],0,5); ?> </span>
                                            </div>
                                        <?php
                                            $in = $z['TimeTrackerTime'];
                                            $count++;
                                        }}
                                         ?>
                                        </div>
                                    </div>
                                <br><br>
                                </div>

                            </div>
                        </div>
                        <?php $active="";} ?>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <div id="add-team" class="at-modal-hide">
            <div class="emp-add-head">
                <section id="emp-submenub">
                    <div class="container">
                            <ul class="list-inline ">
                                <li class="active"> <a href="#" class="at-hide"><img src="<?php echo base_url(); ?>img/arl.png" width="30"></a> </li>
                                <li><p>Update Team</p></li>
                            </ul>   
                    </div>
                </section>
            </div>
            <div class="emp-add-body">
                <div class="container">
                    <?php foreach($teamInfo as $v){ ?>
                    <form method="POST" action="<?php echo base_url();?>teams/add_member">
                    <div class="row">
                        <div class="col-md-8 emp-add-name">
                            <h4>Update Team Info</h4>

                            <div>

                            <!-- team name -->
                            <div class="emp-add-time">
                            <div class="form-group fg-float ">
                                <div class="fg-line">
                                    <input type="text" class="form-control fg-input" value="<?php echo $v['TeamName']; ?>">
                                </div>
                                <label class="fg-label">Team Name</label>
                            </div>
                            </div>
                            <!-- branch name -->
                            <!-- <div class="emp-list-head emp-list-filter">
                                <div class="fg-line">    
                                    <select class="selectpicker bs-select-hidden" title="Branch">
                                        <option class="bs-title-option" value="">Branch</option>
                                        <option>POD</option>
                                        <option>ECHO</option>
                                        <option selected>ADMIN</option>
                                        <option>IT</option>
                                        <option>Verification</option>
                                        <option>QA</option>
                                    </select>
                                </div>
                            </div> -->
                            <!-- Schedule-->
                            <div class="emp-list-head emp-list-filter">
                                <div class="fg-line">    
                                    <select class="selectpicker bs-select-hidden" title="Branch"><option class="bs-title-option" value="">Schedule</option>
                                        <?php 
                                            $a="";
                                            $b="";
                                            $c="";
                                            if($v['TeamSchedule'] == "Morning"){
                                                $a="selected";
                                            }else if($v['TeamSchedule'] == "Afternoon"){
                                                $b="selected";
                                            }else if($v['TeamSchedule'] == "Evening"){
                                                $c="selected";
                                            }
                                         ?>
                                        <option <?php echo $a; ?>>Morning</option>
                                        <option <?php echo $b; ?>>Afternoon</option>
                                        <option <?php echo $c; ?>>Evening</option>
                                    </select>
                                </div>
                            </div>
                             <!-- Time In -->
                            <div class="col-md-6 emp-add-time">
                                    <div class="form-group fg-float  ">
                                        <div class="fg-line">
                                            <input type="text" class="form-control fg-input" value="<?php echo $v['TeamTimeIn']; ?>">
                                        </div>
                                        <label class="fg-label">Time In</label>
                                    </div>
                                     <!-- Time Out -->

                            </div>
                             <div class="col-md-6 emp-add-time">
                                 <!-- Time Out -->
                                <div class="form-group fg-float ">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" value="<?php echo $v['TeamTimeOut']; ?>">
                                    </div>
                                    <label class="fg-label">Time Out</label>
                                </div>
                             </div>
                             <!-- From -->
                            <div class="  col-md-6">
                                 <div class="form-group fg-float  ">
                                   <div class="fg-line">    
                                        <select class="selectpicker bs-select-hidden" title="Branch"><option class="bs-title-option" value="">From</option>
                                            <option selected>Monday</option>
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
                                        <option selected>Friday</option>
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
                                            <input type="text" class="form-control fg-input" value="8:00am">
                                        </div>
                                        <label class="fg-label">Time In</label>
                                    </div>
                            </div>
                             <div class=" emp-add-time">
                                 <!-- Time Out -->
                                <div class="form-group fg-float ">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" value="8:00pm">
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
                                            <option selected>Saturday</option>
                                            <option>Sunday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-25">
                        <button class="btn btn-green btn-flat waves-effect">Update</button>
                        <button class="add-team-modal-btn btn btn-danger btn-flat waves-effect">Cancel</button>
                    </div>

                    </form>
                    <?php } ?>

                    <br><br>
                    <div class="col-md-12">
                        <h4>Team Members <span class="at-count">16</span></h4>
                        <div class=" col-xs-7 add-team-emp">
                            <ul class="list-inline">
                                <li class="hidden-xs">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Carl Harvey Jayme" class="team-emp"><img class="img-circle lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/21.png" alt=""></a>
                                </li>
                                 <li class="hidden-xs">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Prince Royce" class="team-emp"><img class="img-circle lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/20.png" alt=""></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sam Woolf" class="team-emp"><img class="img-circle lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/19.png" alt=""></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jesse Mcbeth" class="team-emp"><img class="img-circle lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/18.png" alt=""></a>
                                </li>

                                <li class="hidden-xs">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jason Whiteslide" class="team-emp"><img class="img-circle lv-img-sm" src="<?php echo base_url(); ?>img/profile-pics/17.png" alt=""></a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#modal-add-team-emp" class="add-emp-img blank-prof" ><img class="lv-img-sm img-circle " src="<?php echo base_url(); ?>img/profile-pics/add.png" alt="">
                                    </a>
                                </li>                                    
                            </ul>
                        </div>
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
    
         <script >
        $(document).ready(function(){
            $("#emp-submenu-addb ").click(function(){
                $("#add-team").removeClass("at-modal-hide");
            });
             $(".at-hide, .add-team-modal-btn").click(function(){
                $("#add-team").addClass("at-modal-hide");
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function(event){
                var x = $(event.target).text();         // active tab
                var y = $(event.relatedTarget).text();  // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });
        });
        </script>
    </body>
</html>