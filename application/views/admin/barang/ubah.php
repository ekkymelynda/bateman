  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Ubah Barang</h1>
      <ol class="breadcrumb">
        <li>Data Barang</li>
        <li>Ubah Barang</li>
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
                  <form class="form-horizontal" id="exampleStandardForm2" enctype="multipart/form-data" autocomplete="on" action="<?php echo base_url();?>admin/ubahBarang/<?php echo $row->ID_BRG;?>" method="post">
                    <div class="form-group">
                        <label class="control-label" for="inputBasicFirstName"><b>Nama</b></label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="nama_brg"
                        value="<?php echo $row->NAMA_BRG;?>" autocomplete="off" />
                    </div>
                    <div class="form-group">
                      <label class="control-label"><b>Jenis</b></label>
                          <select class="form-control" name="id_jenis" required="off">
                              <option value="<?php echo $row->ID_JENIS;?>">
                                <?php echo $row->JENIS_BARANG;?>
                              </option>
                              <option value="1">Aksesoris</option>
                              <option value="2">Alat Tulis</option>
                              <option value="3">Device</option>
                              <option value="4">Elektronik</option>
                              <option value="5">Pakaian</option>
                              <option value="6">Lain - lain</option>
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
                      <label class="control-label" for="inputBasicPassword"><b>Foto</b></label>
                      <br>
                  <?php if($row->FOTO_BRG != NULL) {?>
                    <?php echo '<a href="#"><img width="128px" height="128px" src="data:image/jpeg;base64,'.base64_encode( $row->FOTO_BRG).'"/></a>';?>
                <?php  } ?>
                  <?php if($row->FOTO_BRG == NULL) {?>
                    <?php echo '<a href="#"><img width="128px" height="128px" src="'.base_url().'/assets/images/box.png"/></a>';?></td>  
                 <?php } ?>
            <?php } ?>          
                      <label></label>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput" data-trigger="fileinput" ></div>
                          <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Foto Barang</span><span class="fileinput-exists">Ubah</span><input type="file" name="image"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Hapus</a>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" id="validateButton2" class="btn btn-primary">Simpan</button>
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