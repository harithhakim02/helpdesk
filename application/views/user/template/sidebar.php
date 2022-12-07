<!-- Sidebar -->
<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar" >

<!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <!-- <img style="height:40px ;" src="<?=base_url('assets/back')?>/img/logo.png" alt=""> -->
        Helpdesk RSUD Jombang
    </div>

<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item mt-0">
    <a class="nav-link" href="<?php echo site_url('user');?>"
        aria-expanded="true" >
        <i class="fas fa-fw fa-ticket-alt"></i>
        <span>Tiket Saya</span>
    </a>
   
</li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('user/buat_tiket');?>" 
        aria-expanded="true" >
        <i class="fas fa-solid fa-faw fa-file"></i>
        <span>Buat Tiket</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link " href="<?php echo site_url('login/logout');?>"
        aria-expanded="true" >
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        <span>Log Out</span>
    </a>
</li>




<!-- Footer -->
            <footer class="sticky-footer" style="margin-top:100% ;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
</ul>
<!-- End of Sidebar -->
