<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Bobot Penyakit Pakar</h1>
      </div><!-- /.col -->
      <div class="col-sm-5">
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title primary">List Data</h3>

          <div class="card-tools">
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Penyakit</th>
                <th>Nama Penyakit</th>
                <th>Jumlah Gejala</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query="SELECT * from tb_penyakit";
              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?php echo $no+=1; ?></td>
                    <td><?php echo $id_penyakit; ?></td>
                    <td><?php echo $nama_penyakit; ?></td>
                  </td>

                  <td width="20%">
                    <a href="?hal=bobot_olah&id=<?php echo $id_penyakit; ?>" 
                      class="btn btn-icon btn-primary" title="Edit Data">
                      <?=JumlahData($mysqli,"tb_bobot where id_penyakit='$id_penyakit'");?> 
                      <i class="fa fa-check"></i> </a>

                    </td>
                  </tr>
                <?php }} ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

