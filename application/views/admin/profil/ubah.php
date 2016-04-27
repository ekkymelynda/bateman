  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Profil</h1>
      <ol class="breadcrumb">
        <li>Profil</li>
        <li>Ubah</li>
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
                  <form class="form-group" action="<?php echo base_url();?>admin/profil_lihat?>" method="post">
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama Admin</b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="jenis_brg"
                        value="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Email Admin</b></label>
                      <input type="email" class="form-control" id="inputBasicEmail" name="harga_jual"
                      value="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Password Admin</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="harga_beli"
                      value="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Alamat Admin</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="keuntungan_brg"
                      value="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>No Telp Admin</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="jumlah_brg"
                      VALUE="" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Foto Admin</b></label>
                      <br>
                      <img src="<?php  echo base_url(); ?>assets/portraits/1.jpg" width="128px" hight="128px">
                      <label></label>
                      <button type="button" class="btn btn">Ganti Foto</button>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Simpan</button>
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