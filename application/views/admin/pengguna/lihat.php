  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Lihat Data Pengguna</h1>
      <ol class="breadcrumb">
        <li>Pengguna</li>
        <li>Lihat</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Lihat Data Pengguna</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>ID</th>
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
                 <td><?php echo $row->ID_PGN;?></td>
                 <td><?php echo $row->NAMA_PGN;?></td>
                 <td><?php echo $row->EMAIL_PGN;?></td>
                 <td><?php echo $row->PSWD_PGN;?></td>
                 <td><?php echo $row->ALAMAT_PGN;?></td>
                 <td><?php echo $row->NOTLP_PGN;?></td>
                 <td><?php echo $row->FOTO_PGN;?></td>
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