  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Profil</h1>
      <ol class="breadcrumb">
        <li>Profil</li>
        <li>Lihat Profil</li>
      </ol>
    </div>

    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Data Profil</h4>
                <div class="example">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>ID</b></label>
                        <br>
                        <label><?php echo $_SESSION['adminid']; ?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama</b></label>
                        <br>
                        <label><?php echo $_SESSION['adminname']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Email</b></label>
                      <br>
                      <label><?php echo $_SESSION['adminemail']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Password</b></label>
                      <br>
                      <label><?php echo $_SESSION['adminpass']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Alamat</b></label>
                      <br>
                      <label><?php echo $_SESSION['adminalamat']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>No Telp</b></label>
                      <br>
                      <label><?php echo $_SESSION['admintelp']; ?></label>
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
                      <br>
                      <label></label>
                    </div>
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