<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<?php foreach ($crud['css_files'] as $file) : ?>
  <link rel="stylesheet" href="<?= $file; ?>">
<?php endforeach; ?>
<link rel="stylesheet" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css'); ?>">