  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Data Barang</h1>
      <ol class="breadcrumb">
        <li>Barang</li>
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
                <h4 class="example-title">Ubah Data Barang</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                  <form class="form-group" action="<?php echo base_url();?>admin/ubahBarang/<?php echo $row->ID_BRG;?>" method="post">
                    <div class="form-group">
                      <label class="control-label"><b>Pengguna</b></label>
                          <select class="form-control" name="id_png" required="off">
                              <option value="<?php echo $row->ID_PGN;?>"><?php echo $row->ID_PGN;?></option>
                              <option value="">A</option>
                              <option value="">B</option>
                              <option value="">C</option>
                              <option value="">D</option>
                              <option value="">E</option>
                              <option value="">F</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama</b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_brg"
                        value="<?php echo $row->NAMA_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label"><b>Jenis</b></label>
                          <select class="form-control" name="jenis_brg" required="off">
                              <option value="<?php echo $row->JENIS_BRG;?>"><?php echo $row->JENIS_BRG;?></option>
                              <option value="">A</option>
                              <option value="">B</option>
                              <option value="">C</option>
                              <option value="">D</option>
                              <option value="">E</option>
                              <option value="">F</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Tanggal</b></label>
                      <input type="date" class="form-control" id="inputBasicEmail" name="tglpost_brg"
                      value="<?php echo $row->TGLPOST_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Lokasi</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="lokasi_brg"
                      value="<?php echo $row->LOKASI_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Deskripsi</b></label>
                      <input type="text" class="form-control" id="inputBasicEmail" name="deskripsi_brg"
                      VALUE="<?php echo $row->DESKRIPSI_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Status</b></label>
                      <input type="text" class="form-control" id="inputBasicPassword" name="status_brg"
                      value="<?php echo $row->STATUS_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Foto Barang</b></label>
                      <br>
                      <input type="image" class="form-control" id="inputBasicPassword" name="foto_brg"
                      value="<?php echo $row->FOTO_BRG;?>" autocomplete="off" />
                      <img src="<?php  echo base_url(); ?>assets/portraits/1.jpg" width="128px" hight="128px">
                      <input type="text" class="form-control" id="inputBasicPassword" name="nama_foto"
                      value="<?php echo $row->NAMA_FOTO; }?>" autocomplete="off" />
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