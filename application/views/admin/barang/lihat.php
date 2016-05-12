  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Daftar Barang</h1>
      <ol class="breadcrumb">
        <li>Data Barang</li>
        <li>Daftar Barang</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Daftar Data Barang</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Pengguna</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Nama Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h->result() as $row){?>
              <tr>
                 <td><?php echo $row->ID_PGN;?></td>
                 <td><?php echo $row->NAMA_BRG;?></td>
                 <td><?php echo $row->JENIS_BARANG;?></td>
                 <td><?php echo $row->TGLPOST_BRG;?></td>
                 <td><?php echo $row->LOKASI_BRG;?></td>
                 <td><?php echo $row->DESKRIPSI_BRG;?></td>
                 <td><?php echo $row->STATUS_BRG;?></td>
                  <?php if($row->FOTO_BRG != NULL) {?>
                 <td><?php echo '<a href="#"><img width="128px" height="128px" src="data:image/jpeg;base64,'.base64_encode( $row->FOTO_BRG).'"/></a>';?></td>
                <?php  } ?>
                  <?php if($row->FOTO_BRG == NULL) {?>
                 <td><?php echo '<a href="#"><img width="128px" height="128px" src="'.base_url().'/assets/images/box.png"/></a>';?></td>  
                 <?php } ?>                  
                 <td><?php echo $row->NAMA_FOTO;?></td>
                 <td class="text-nowrap">
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Ubah">
                    <a href="<?php echo base_url(); ?>admin/formubahBarang/<?php echo $row->ID_BRG;?>"><i class="icon wb-wrench" aria-hidden="true"></i></a>
                  </button>
                  <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Hapus">
                    <a href="<?php echo base_url(); ?>admin/formhapusBarang/<?php echo $row->ID_BRG;?>"><i class="icon wb-close" aria-hidden="true"></i></a>
                  </button>
                </td>
            </tr>
        <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->