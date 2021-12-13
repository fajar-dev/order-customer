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
                                        <form action="<?php echo base_url() ?>page/tambah_layanan" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Kode Pelanggan</label>
                                                    <input type="text" class="form-control" name="kode" value="<?php echo'KL-'.mt_rand(1000, 9999); ?>" readonly required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Nama Layanan</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Jumlah</label>
                                                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="1" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Biaya</label>
                                                    <input type="number" class="form-control" name="biaya" placeholder="Biaya" required>
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
                                              <th>Kode Layanan</th>
                                              <th>Nama Layanan</th>
                                              <th>Jumlah</th>
                                              <th>Biaya</th>
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
                                              <td><?php echo htmlentities($data->kd_layanan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->nm_layanan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->jumlah, ENT_QUOTES, 'UTF-8');?></td>
                                              <td>Rp.<?php echo number_format($data->biaya);?></td>
                                              <td>
                                                  <a href="<?php echo base_url() ?>page/hapus_layanan/<?php echo $data->id?>" class="btn btn-danger btn-del">Hapus</a>
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