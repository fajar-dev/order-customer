<style>
table, th, td {
  border:1px solid black;
}
</style>
<center><h1>Laporan data order pelanggan <br></h1><hr><br></center>
                                            <table style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Tanggal Pesan</th>
                                                        <th>Nama Pelanggan</th>
                                                        <th>Nama Layanan</th>
                                                        <th>Tanggal Acara</th>
                                                        <th>Tempat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                            $no=1;
                                                            foreach($hasil as $data){
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $no++?></td>
                                                        <td><?php echo htmlentities($data->tgl_pesan, ENT_QUOTES, 'UTF-8');?></td>
                                                        <td><?php echo $data->nm_pelanggan;?></td>
                                                        <td><?php echo $data->nm_layanan;?></td>
                                                        <td><?php echo $data->tanggal_acara;?></td>
                                                        <td><?php echo $data->tempat;?></td>
                                                    </tr>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
<script type="text/javascript">
window.print();
</script>
