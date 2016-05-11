  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Buat Admin Baru</h1>
      <ol class="breadcrumb">
        <li>Data Admin</li>
        <li>Buat Baru</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Form Data Admin</h4>
                <div class="example">
                  <form autocomplete="off" name="buatAdminForm" id="exampleStandardForm" enctype="multipart/form-data" action="<?php echo base_url();?>admin/buatAdmin" method="post">
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
                      <label class="control-label" for="inputBasicPassword"><b>Foto</b></label>
                      <br>
                      <label></label>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput" data-trigger="fileinput" ></div>
                          <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Foto Profil</span><span class="fileinput-exists">Ubah</span><input type="file" name="image"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary" id="validateButton2" name="buatAdminForm">Buat</button>
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