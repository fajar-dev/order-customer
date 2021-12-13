
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url() ?>assets/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/quixnav-init.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>

    <script src="<?php echo base_url() ?>assets/vendor/chartist/js/chartist.min.js"></script>

    <script src="<?php echo base_url() ?>assets/vendor/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="<?php echo base_url() ?>assets/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->
    
    <!-- Datatable -->
    <script src="<?php echo base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins-init/datatables.init.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sweetalert.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/select2/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins-init/select2-init.js"></script>


  <!-- Page Specific JS File -->
  <script>
    $('.btn-del').on('click',function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'hapus data ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'delete'
        }).then((result) => {
            if (result.value) {
            document.location.href = href;
            }
        })
        })
    </script>
</body>
</html>