<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.ninecoffeeroastery.com/" target="_blank">nine coffee</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Nine Coffee & made with wanitechnocraft <i class=""></i></span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<!-- plugins:js -->
<script src="<?= base_url('assets0/'); ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets0/'); ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets0/'); ?>vendors/moment/moment.min.js"></script>
<script src="<?= base_url('assets0/'); ?>vendors/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('assets0/'); ?>vendors/chartist/chartist.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets0/'); ?>js/off-canvas.js"></script>
<script src="<?= base_url('assets0/'); ?>js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= base_url('assets0/'); ?>js/dashboard.js"></script>
<!-- End custom js for this page -->
<script src="<?= base_url('assets0/'); ?>ckeditor/ckeditor.js"></script>
<script src="<?= base_url('assets0/'); ?>ckfinder/ckfinder.js"></script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserBrowseUrl: '<?php echo base_url(); ?>assets0/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '<?php echo base_url(); ?>assets0/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',




        toolbar: 'editor', //memanggil name toolbar 'MyToolbar' yang sebelumnya telah disetting di config.js
        width: "100%",


    });
</script>
</body>

</html>