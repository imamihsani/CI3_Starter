        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>dashboard">
                <!-- <div class="sidebar-brand-icon">
                    <i class="fas fa-hospital"></i>
                </div> -->
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url(); ?>assets/img/logo_pt.png" style="width: 50px;" alt="LOGO RSU AMANAH">
                </div>
                <div class="sidebar-brand-text"> CI 3 STARTER</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0"> 

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>dashboard"> 
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            

            <?php if ($this->session->userdata('role') == '1') { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/register/proses'); ?>">
                    <i class="fa fa-user-plus"></i>
                    <span>Register User</span></a>
            </li>
            <?php }; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Modul
            </div>
            <!-- Nav Item - Monitoring Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoring" aria-expanded="true" aria-controls="collapseMonitoring">
                    <i class="fas fa-book"></i>
                    <span>Monitoring</span>
                </a>
                <div id="collapseMonitoring" class="collapse" aria-labelledby="headingMonitoring" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rekap:</h6>
                        <a class="collapse-item" href="<?php echo base_url(''); ?>"><i class="fas fa-chart-bar"></i> Penjualan</a>
                        <a class="collapse-item" href="<?php echo base_url(''); ?>"><i class="fas fa-chart-bar"></i> Pengeluaran</a>
                        <h6 class="collapse-header">SDM:</h6>
                        <a class="collapse-item" href="<?php echo base_url(''); ?>"><i class="fas fa-chart-pie"></i> Pegawai</a>
                        <h6 class="collapse-header">Cetakan:</h6>
                        <a class="collapse-item" href="<?php echo base_url(''); ?>"><i class="fas fa-file-alt"></i> Nota</a>
                    </div>
                </div>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- dashboard Content -->
            <div id="content">