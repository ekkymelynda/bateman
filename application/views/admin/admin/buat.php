  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Buat Data Admin</h1>
      <ol class="breadcrumb">
        <li>Admin</li>
        <li>Buat</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Buat Data Admin</h4>
                <div class="example">
                  <form autocomplete="off" action="<?php echo base_url();?>admin/admin_lihat" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama Admin</b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_adm"
                        placeholder="" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Email Admin</b></label>
                        <input type="email" class="form-control" id="inputBasicFirstName" name="email_adm"
                        placeholder="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Password Admin</b></label>
                      <input type="password" class="form-control" id="inputBasicEmail" name="pswd_adm"
                      placeholder="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Alamat Admin</b></label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="alamat_adm"
                      placeholder="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>No Telp Admin</b></label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="notlp_adm"
                      placeholder="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Foto Admin</b></label>
                      <br>
                      <input type="money" class="form-control" id="inputBasicEmail" name="foto_adm"
                      placeholder="" autocomplete="off" />
                      <img src="<?php  echo base_url(); ?>assets/portraits/1.jpg" width="128px" hight="128px">
                      <input type="money" class="form-control" id="inputBasicEmail" name="nama_foto"
                      placeholder="" autocomplete="off" />
                      <button type="button" class="btn btn">Unggah</button>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Example Basic Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->