<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <?php foreach($admin as $list) : ?>
              <img class="profile-user-img img-responsive img-circle" style="width:100px;height:100px;" src="<?php echo base_url('foto/adminFoto/' . $list->foto) ?>" alt="User profile picture">
              <h3 class="profile-username text-center"><?= $list->nama_lengkap ?></h3>
              <p class="text-muted text-center">Created on : <?php echo date_format(date_create($list->post_date),"d-m-Y") ?></p>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Profile</a></li>
            </ul>

            <div class="tab-content">
            
              <div class="active tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="<?= $list->nama_lengkap ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="<?= $list->email ?>" disabled>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nomor Hp</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="<?= $list->nomor_hp ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="<?= $list->jenis_kelamin ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="<?= base_url('Admin/editprofile') ?>" class="btn btn-primary">Edit Profile</a>
                    </div>
                  </div>
                  <?php endforeach;?>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->