<div class="container py-3">
  <?= $this->session->flashdata('delete_notif'); ?>
  <table id="tblModul12" class="table table-striped table-bordered" cellspacing="0">
    <thead class="text-center">
      <th>Nama</th>
      <th>Nomor Induk Dosen</th>
      <th>Email</th>
      <th>Foto</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php foreach ($dosen as $key => $dsn) : ?>
        <tr class="text-center">
          <td class="align-middle"><?= $dsn['fname_dosen'] . " " . $dsn['lname_dosen']; ?></td>
          <td class="align-middle"><?= $dsn['nomorinduk_dosen']; ?></td>
          <td class="align-middle"><?= $dsn['email_dosen']; ?></td>
          <td class="align-middle"><img src="<?= base_url($dsn['foto_dosen']); ?>" alt="foto dosen" width="150"></td>
          <td class="align-middle"><a class="btn btn-danger" href="<?= base_url('index.php/home/hapusDosen/') . $dsn['id_dosen']; ?>">Hapus</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>