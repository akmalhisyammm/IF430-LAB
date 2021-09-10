<div class="container py-3">
  <?= $this->session->flashdata('delete_notif'); ?>
  <table id="tblModul12" class="table table-striped table-bordered" cellspacing="0">
    <thead class="text-center">
      <th>Nama Mahasiswa</th>
      <th>Nomor Induk Mahasiswa</th>
      <th>Email Mahasiswa</th>
      <th>Tugas</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Grade</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $key => $mhs) : ?>
        <tr class="text-center">
          <?php
          $nilai_akhir = (0.3 * $mhs['tugas_mahasiswa']) + (0.3 * $mhs['uts_mahasiswa'] + (0.4 * $mhs['uas_mahasiswa']));
          $grade_mhs = "";

          if ($nilai_akhir >= 80 && $nilai_akhir <= 100) $grade_mhs = "A";
          elseif ($nilai_akhir >= 60 && $nilai_akhir <= 79) $grade_mhs = "B";
          elseif ($nilai_akhir >= 40 && $nilai_akhir <= 59) $grade_mhs = "C";
          elseif ($nilai_akhir >= 0 && $nilai_akhir <= 39) $grade_mhs = "D";
          else $grade_mhs = "Nilai tidak valid!";
          ?>
          <td class="align-middle"><?= $mhs['fname_mahasiswa'] . " " . $mhs['lname_mahasiswa']; ?></td>
          <td class="align-middle"><?= $mhs['nomorinduk_mahasiswa']; ?></td>
          <td class="align-middle"><?= $mhs['email_mahasiswa']; ?></td>
          <td class="align-middle"><?= $mhs['tugas_mahasiswa']; ?></td>
          <td class="align-middle"><?= $mhs['uts_mahasiswa']; ?></td>
          <td class="align-middle"><?= $mhs['uas_mahasiswa']; ?></td>
          <td class="align-middle"><?= $grade_mhs; ?></td>
          <td class="align-middle"><a class="btn btn-danger" href="<?= base_url('index.php/home/hapusMahasiswa/') . $mhs['id_mahasiswa']; ?>">Hapus</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>