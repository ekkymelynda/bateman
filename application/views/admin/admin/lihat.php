  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Daftar Admin</h1>
      <ol class="breadcrumb">
        <li>Data Admin</li>
        <li>Daftar Admin</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Daftar Data Admin</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Foto</th>
                <th>Nama Foto</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h->result() as $row){?>
              <tr>
                 <td><?php echo $row->NAMA_ADM;?></td>
                 <td><?php echo $row->EMAIL_ADM;?></td>
                 <td><?php echo $row->PSWD_ADM;?></td>
                 <td><?php echo $row->ALAMAT_ADM;?></td>
                 <td><?php echo $row->NOTLP_ADM;?></td>
                  <?php if($row->FOTO_ADM != NULL) {?>
                 <td><?php echo '<a href="#"><img width="128px" height="128px" src="data:image/jpeg;base64,'.base64_encode( $row->FOTO_ADM).'"/></a>';?></td>
                <?php  } ?>
                  <?php if($row->FOTO_ADM == NULL) {?>
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