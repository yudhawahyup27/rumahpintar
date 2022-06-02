<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('asset'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset'); ?>/js/sb-admin-2.min.js"></script>
<script type="text/javascript">
    $(".pin").change(function(e) {
        host = "http://" + $("#host").val() + "/";
        pin = $(this).val();
        state = this.checked ? 1 : 0;

        var data = new FormData();
        data.append('pin', pin);
        data.append('state', state);

        $.ajax({
                url: host + 'setpin',
                type: 'POST',
                dataType: 'html',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
            })
            .always(function() {});

    });
</script>
<script src=" <?= base_url(); ?>/asset/control/js/jquery.min.js"></script>
<script src=" <?= base_url(); ?>/asset/control/js/bootstrap.min.js"></script>
<script src=" <?= base_url(); ?>/asset/control/js/bootstrap-toggle.min.js"></script>
<script type='text/javascript'>
    var now = new Date();
    var hours = now.getHours();
    if (hours >= 5 && hours <= 6) {
        var myAlert = document.getElementById('myAlert')
        myAlert.style.display
    } else if (hours >= 17 && hours <= 18) {

    }
</script>
</body>

</html>