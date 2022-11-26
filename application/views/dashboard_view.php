<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if ($this->session->userdata('level') == 'Anggota') {
  redirect(base_url('userminor'));
} ?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-12">
        <div class="col-lg-12 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $count_pengguna; ?></h3>

              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="small-box bg-yellow" style="height: 37rem;">
            <div class="inner">
              <h3>Announcement</h3>
              <p>Hello! This is a generator for text fonts of the "cool" variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites rather than generators of copy-paste text like this one. So currently this is basically a duplicate of the above, but I think I'll try to collect a few more "cool" text fonts, like the old enlgish one, and specialise this a bit.
                If you're wondering how one produces cool text fonts like you see above, it's fairly simple (but maybe not what you'd expect). Basically, the text that gets generated isn't actually a font - it's a bunch of symbols that are in the unicode standard. You're reading symbols that are in the unicode standard right now - the alphabet is a part of it, as are all the regular symbols on your keyboard: !@#$%^&*() etc.
                So the difference is, these rad "fonts" that are produces, just don't happen to appear on your keyboard - there's not enough room. The unicode standard has more than 100,000 symbols defined in it. That's a lot of symbols. And amongst those symbols are many different "alphabets" - some of which this translator is able to produce</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
<!-- /.content -->