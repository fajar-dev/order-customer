<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                <?php echo $this->session->flashdata('msg') ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input <?php echo $title ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="<?php echo base_url() ?>page/tambah_pelanggan" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Kode Pelanggan</label>
                                                    <input type="text" class="form-control" name="kode" value="<?php echo'KP-'.mt_rand(1000, 9999); ?>" readonly required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Nama Pelanggan</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>No telepon</label>
                                                    <input type="number" class="form-control" name="hp" placeholder="Nomor aktif" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary px-5 py-2 mt-4">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Data <?php echo $title ?></h4>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="example" class="display" style="min-width: 845px">
                                      <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Kode Pelanggan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Alamat</th>
                                            <th>No telepon</th>
                                            <th>Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                                    <?php
                                                        $no=1;
                                                        foreach($hasil as $data){
                                                    ?>
                                          <tr class="text-dark">
                                              <td><?php echo $no++?></td>
                                              <td><?php echo htmlentities($data->kd_pelanggan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->nm_pelanggan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->no_telp, ENT_QUOTES, 'UTF-8');?></td>
                                              <td>
                                                  <a href="<?php echo base_url() ?>page/hapus_pelanggan/<?php echo $data->id?>" class="btn btn-danger btn-del">Hapus</a>
                                                </td>
                                          </tr>
                                                    <?php
                                                        }
                                                    ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>  
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->