
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>assets/back/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/back/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url()?>assets/back/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url()?>assets/back/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url()?>assets/back/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <!-- <script src="<?= base_url()?>assets/back/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url()?>assets/back/js/demo/chart-pie-demo.js"></script> -->

    <!-- Page level plugins -->
    <script src="<?= base_url()?>assets/back/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>assets/back/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url()?>assets/back/js/demo/datatables-demo.js"></script>

    <script src="<?=base_url()?>assets/back/js/bootstrap-select.min.js"></script>

    <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_user').attr("value",div.data('id_user'));
            modal.find('#nama_user').attr("value",div.data('nama_user'));
            modal.find('#email').html(div.data('email'));
            modal.find('#no_telp').attr("value",div.data('no_telp'));
        });
    });
</script>

</body>

</html>