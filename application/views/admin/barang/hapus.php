  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Hapus Data Barang</h1>
      <ol class="breadcrumb">
        <li>Barang</li>
        <li>Hapus</li>
      </ol>
    </div>
    <div class="page-content">
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-6">
              <!-- Example Basic Form -->
              <div class="example-wrap">
                <h4 class="example-title">Hapus Data Barang</h4>
                <div class="example">
                  <?php foreach ($h->result() as $row){?>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">ID</label>
                        <br>
                        <label><?php echo $row->ID_BRG;?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName">Nama Barang</label>
                        <br>
                        <label><?php echo $row->NAMA_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail">Jenis Barang</label>
                      <br>
                      <label><?php echo $row->JENIS_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Harga Jual Barang</label>
                      <br>
                      <label><?php echo $row->HARGA_JUAL;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Harga Beli Barang</label>
                      <br>
                      <label><?php echo $row->HARGA_BELI;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword">Status</label>
                      <br>
                      <label><?php echo $row->STATUS_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label>Apakah Anda yakin ingin menghapus data tersebut?</label>
                      <br>
                    </div>
                    <div class="form-group">
                      <form method="post" class="form-group" action="<?php echo base_url(); ?>barang/delete_barang/<?php echo $row->ID_BRG; }?>">
                        <button type="submit" class="btn btn-danger">Ya</button>
                      </form>
                      <form method="get" action="<?php echo base_url(); ?>barang/barang_lihat">
                        <button type="submit" class="btn btn-success">Tidak</button>
                      </form>
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