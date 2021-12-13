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
                                        <form action="<?php echo base_url() ?>page/tambah_order" method="post">
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Pelanggan</label>
                                                    <select class="dropdown-groups form-control" name="pelanggan">
                                                      <?php
                                                        foreach($pelanggan as $data){
                                                      ?>
                                                      <option value="<?php echo htmlentities($data->nm_pelanggan, ENT_QUOTES, 'UTF-8');?>"><?php echo htmlentities($data->kd_pelanggan, ENT_QUOTES, 'UTF-8');?> - <?php echo htmlentities($data->nm_pelanggan, ENT_QUOTES, 'UTF-8');?></option>
                                                      <?php
                                                        }
                                                      ?>
                                                  </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label>Layanan</label>
                                                  <select class="dropdown-groups form-control" name="layanan">
                                                      <?php
                                                        foreach($layanan as $data){
                                                      ?>
                                                      <option value="<?php echo htmlentities($data->nm_layanan, ENT_QUOTES, 'UTF-8');?>"><?php echo htmlentities($data->kd_layanan, ENT_QUOTES, 'UTF-8');?> - <?php echo htmlentities($data->nm_layanan, ENT_QUOTES, 'UTF-8');?></option>
                                                      <?php
                                                        }
                                                      ?>
                                                </select>
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label>Tempat</label>
                                                  <input type="text" class="form-control" name="tempat" placeholder="Tempat" required>
                                              </div>
                                              <div class="form-group col-md-6">
                                                    <label>Tanggal Acara</label>
                                                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"  required>
                                              </div>
                                              <div class="form-group col-md-6">
                                                    <label>Total Biaya</label>
                                                    <input type="number" class="form-control" name="total" placeholder="Total Biaya" required>
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label>Uang Muka</label>
                                                  <input type="number" class="form-control" name="dp" placeholder="Uang Muka" required>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label>Keterangan</label>
                                              <textarea class="form-control" rows="4" id="comment" name="ket" placeholder="Tulis Keterangan..." required></textarea>
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
                                            <th>Tanggal</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Layanan</th>
                                            <th>Tanggal Acara</th>
                                            <th>Tempat</th>
                                            <th>Total Biaya</th>
                                            <th>Uang Muka</th>
                                            <th>Keterangan</th>
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
                                              <td><?php echo htmlentities($data->tgl_pesan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->nm_pelanggan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->nm_layanan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->tanggal_acara, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->tempat, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->total, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->dp, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->keterangan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td>
                                                  <a href="<?php echo base_url() ?>page/hapus_order/<?php echo $data->id?>" class="btn btn-danger btn-del">Hapus</a>
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