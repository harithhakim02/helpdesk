<?php $this->load->view('admin/template/meta');?>
<div id="wrapper">
    <?php $this->load->view('admin/template/sidebar');?>
    <?php echo $contents; ?>
</div>
<?php $this->load->view('admin/template/logout');?>
<?php $this->load->view('admin/template/script');?>