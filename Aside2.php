<?php include("h.php"); ?>
<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="hr" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="hprofile" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</span></a></li>
                  
						<?php
						if($role=="HOD")
						{ ?>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="hview" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">View faculty</span></a></li>
						<?php } ?>
						
						<?php
						if($s=="admin")
						{ ?>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="hview" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">View faculty</span></a></li>
						<?php } ?>
						
						
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="pwd" aria-expanded="false"><i class="ti-key"></i><span class="hide-menu">Change Password</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>