            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="/">SIGPERMAS</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="/">SPM</a>
                </div>
                <ul class="sidebar-menu">                    
                    <li class="menu-header">Starter</li>                    
                    <li <?php if($this->uri->uri_string() == 'admin'){echo 'class="active"';}?> ><a class="nav-link" href="<?php echo base_url('admin'); ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                    <li <?php if($this->uri->uri_string() == 'admin/datamasjid'){echo 'class="active"';}?> ><a class="nav-link" href="<?php echo base_url('admin/datamasjid'); ?>"><i class="fas fa-list"></i> <span>Daftar Masjid</span></a></li>
                </ul>
<!-- 
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                    </a>
                </div> -->
            </aside>