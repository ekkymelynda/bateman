  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Profil</h1>
      <ol class="breadcrumb">
        <li>Profil</li>
        <li>Ubah Profil</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Ubah Data Profil</h4>
                <div class="example">
                  <form class="form-group" name="adminForm" id="exampleStandardForm3" enctype="multipart/form-data" action="<?php echo base_url();?>admin/updateAdmin" method="post">
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama</b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_adm"
                        value="<?php echo $_SESSION['adminname']; ?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Email</b></label>
                      <input type="email" class="form-control" id="inputBasicEmail" name="email_adm"
                      value="<?php echo $_SESSION['adminemail']; ?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Password</b></label>
                      <input type="password" class="form-control" id="inputBasicEmail" name="pswd_adm"
                      value="<?php echo $_SESSION['adminpass']; ?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Alamat</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="alamat_adm"
                      value="<?php echo $_SESSION['adminalamat']; ?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>No Telp</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="notlp_adm"
                      value="<?php echo $_SESSION['admintelp']; ?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Foto</b></label>
                      <br>
                  <?php if($_SESSION['adminfoto'] != NULL) {?>
                 <td><?php echo '<img width="128px" height="128px" src="data:image/jpeg;base64,'.base64_encode( $_SESSION['adminfoto']).'"/></a>';?></td>
                <?php  } ?>
                  <?php if($_SESSION['adminfoto'] == NULL) {?>
                 <td><?php echo '<img width="128px" height="128px" src="'.base_url().'/assets/images/useradmin.png"/></a>';?></td>  
                 <?php } ?>
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
                      <button type="submit" class="btn btn-primary" id="validateButton2" name="adminForm">Simpan</button>
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