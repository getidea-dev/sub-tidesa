<script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/js-cookie/js.cookie.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= base_url('assets/vendor/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables.net-select/js/dataTables.select.min.js') ?>"></script>

<script src="<?= base_url('assets/js/argon.min9f1e.js?v=1.1.0') ?>"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

<script>
  $('#subdomain').on('keyup', function() {
    const subdomain = $('#subdomain').val();

    $.ajax({
      url: "<?= base_url('auth/checkSubdomain') ?>",
      type: 'post',
      data: {
        subdomain: subdomain
      },
      success: function() {
        $('#notif').html('success')
      }
    });
  });
</script>
</body>

</html>