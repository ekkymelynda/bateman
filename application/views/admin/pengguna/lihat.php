  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Daftar Pengguna</h1>
      <ol class="breadcrumb">
        <li>Data Pengguna</li>
        <li>Daftar Pengguna</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Daftar Data Pengguna</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Foto</th>
                <th>Nama Foto</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h->result() as $row){?>
              <tr>
                 <td><?php echo $row->NAMA_PGN;?></td>
                 <td><?php echo $row->EMAIL_PGN;?></td>
                 <td type=>*****</td>
                 <td><?php echo $row->ALAMAT_PGN;?></td>
                 <td><?php echo $row->NOTLP_PGN;?></td>
                  <?php if($row->FOTO_PGN != NULL) {?>
                 <td><?php echo '<a href="#"><img width="128px" height="128px" src="data:image/jpeg;base64,'.base64_encode( $row->FOTO_PGN).'"/></a>';?></td>
                <?php  } ?>
                  <?php if($row->FOTO_PGN == NULL) {?>
                 <td><?php echo '<a href="#"><img width="128px" height="128px" src="'.base_url().'/assets/images/useradmin.png"/></a>';?></td>  
                 <?php } ?>                  
                 <td><?php echo $row->NAMA_FOTO;?></td>
              <tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>
  <!-- End Page -->