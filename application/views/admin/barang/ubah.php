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
                  <form class="form-group" action="<?php echo base_url();?>admin/barang_lihat?>" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Pengguna</b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_brg"
                        value="" autocomplete="off" />
                    </div>
                      <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b></b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="jenis_brg"
                        value="<?php echo $row->JENIS_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b></b></label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="harga_jual"
                      value="<?php echo $row->HARGA_JUAL;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b></b></label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="harga_beli"
                      value="<?php echo $row->HARGA_BELI;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b></b></label>
                      <input type="money" class="form-control" id="inputBasicEmail" name="keuntungan_brg"
                      value="<?php echo $row->KEUNTUNGAN_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b></b></label>
                      <input type="number" class="form-control" id="inputBasicEmail" name="jumlah_brg"
                      VALUE="<?php echo $row->JUMLAH_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b></b></label>
                      <input type="text" class="form-control" id="inputBasicPassword" name="status_brg"
                      value="<?php echo $row->STATUS_BRG; }?>" autocomplete="off" />
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