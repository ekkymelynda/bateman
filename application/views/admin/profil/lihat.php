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
                        <label><?php echo $_SESSION['userid']; ?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama</b></label>
                        <br>
                        <label><?php echo $_SESSION['name']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Email</b></label>
                      <br>
                      <label><?php echo $_SESSION['email']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Password</b></label>
                      <br>
                      <label><?php echo $_SESSION['pass']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Alamat</b></label>
                      <br>
                      <label><?php echo $_SESSION['alamat']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>No Telp</b></label>
                      <br>
                      <label><?php echo $_SESSION['telp']; ?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Foto</b></label>
                      <br>
                      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['foto']).'" width="128px" hight="128px">'; ?>
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