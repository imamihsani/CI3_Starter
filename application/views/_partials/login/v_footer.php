<!-- Footer -->
<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span class="badge badge-light"><?php echo "Copyright &copy; PT Wavetek Integra Nusa " . date("Y") ?></span>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
<script>
    $(document).ready(function() {
        no = 1;
        $('#showPassword').on('click', function() {
            if (no % 2 == 0) {
                // console.log('off');
                $('#password').attr('type', 'password');
            } else {
                // console.log('on');
                $('#password').attr('type', 'text');
            }
            no++;
        });
    });
</script>

</body>

</html>