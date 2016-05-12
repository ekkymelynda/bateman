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
                        <label class="control-label" for="inputBasicFirstName"><b>ID</b></label>
                        <br>
                        <label><?php echo $row->ID_BRG;?></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Pengguna</b></label>
                        <br>
                        <label><?php echo $row->ID_PGN;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicEmail"><b>Nama</b></label>
                      <br>
                      <label><?php echo $row->NAMA_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Jenis</b></label>
                      <br>
                      <label><?php echo $row->JENIS_BARANG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Tanggal</b></label>
                      <br>
                      <label><?php echo $row->TGLPOST_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Lokasi</b></label>
                      <br>
                      <label><?php echo $row->LOKASI_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Deskripsi</b></label>
                      <br>
                      <label><?php echo $row->DESKRIPSI_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Status</b></label>
                      <br>
                      <label><?php echo $row->STATUS_BRG;?></label>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputBasicPassword"><b>Foto Barang</b></label>
                      <br>
                  <?php if($row->FOTO_BRG != NULL) {?>
                    <?php echo '<img width="128px" height="128px" src="data:image/jpeg;base64,'.base64_encode( $row->FOTO_BRG).'"/>';?>
                  <?php  } ?>
                  <?php if($row->FOTO_BRG == NULL) {?>
                    <?php echo '<img width="128px" height="128px" src="'.base_url().'/assets/images/box.png"/></a>';?>              
                  <?php  } ?>
                        <br>
                      <label><?php echo $row->NAMA_FOTO;?></label>
                    </div>
                    <div class="form-group">
                      <label><b>Apakah Anda yakin ingin menghapus data tersebut?</b></label>
                      <br>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-2">
                        <form method="post" class="form-group" action="<?php echo base_url(); ?>admin/hapusBarang/<?php echo $row->ID_BRG; }?>">
                          <button type="submit" class="btn btn-danger">Ya</button>
                        </form>
                      </div>
                      <div class="col-sm-2">
                        <form method="post" action="<?php echo base_url(); ?>admin/lihatBarang">
                          <button type="submit" class="btn btn-success">Tidak</button>
                         </form>
                      </div>
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