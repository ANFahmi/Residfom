<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <ul class="sidebar-menu" data-widget="tree">
            <?php if ($this->session->userdata('level') == 'Admin') { ?>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <li class="header">OPTION</li>
                <li class="<?php if ($this->uri->uri_string() == 'dashboard') {
                                echo 'active';
                            } ?>">
                    <a href="<?php echo base_url('dashboard'); ?>">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->uri_string() == 'user') {
                                echo 'active';
                            } ?>
                <?php if ($this->uri->uri_string() == 'user/tambah') {
                    echo 'active';
                } ?>
                <?php if ($this->uri->uri_string() == 'user/edit/' . $this->uri->segment('3')) {
                    echo 'active';
                } ?>">
                    <a href="<?php echo base_url('user'); ?>" class="cursor">
                        <span>Data Pengguna</span></a>
                </li>

                <li class="<?php if ($this->uri->uri_string() == 'userminor/denda') {
                                echo 'active';
                            } ?>">
                    <a href="<?php echo base_url("userminor/denda"); ?>" class="cursor">
                        <span>GIS</span>

                    </a>
                </li>
            <?php } ?>
            <?php if ($this->session->userdata('level') == 'Anggota') { ?>
                <li class="<?php if ($this->uri->uri_string() == 'userminor') {
                                echo 'active';
                            } ?>">
                    <a href="<?php echo base_url("userminor"); ?>" class="cursor">
                        <span>Dashboard </span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->uri_string() == 'userminor/kembali') {
                                echo 'active';
                            } ?>">
                    <a href="<?php echo base_url("userminor/kembali"); ?>" class="cursor">
                        <span>Data Anggota</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->uri_string() == 'user/edit/' . $this->uri->segment('3')) {
                                echo 'active';
                            } ?>">
                    <a href="<?php echo base_url('user/edit/' . $this->session->userdata('ses_id')); ?>" class="cursor">
                        <span>Profile</span>
                    </a>
                </li>
                <li class="<?php if ($this->uri->uri_string() == 'userminor/denda') {
                                echo 'active';
                            } ?>">
                    <a href="<?php echo base_url("userminor/denda"); ?>" class="cursor">
                        <span>GIS</span>

                    </a>
                </li>
            <?php } ?>
        </ul>
        <div class="clearfix"></div>
        <br />
        <br />
    </section>
    <!-- /.sidebar -->
</aside>