<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  echo $js;
  echo $css;
  ?>
  <title>Week 10</title>
</head>

<body>
  <?php
  echo $header;
  echo $footer;
  ?>

  <div class="container">
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Salary</th>
          <th scope="col">No. Telepon</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Agung W. Chandranata</td>
          <td>Trainer</td>
          <td>Rp.2.100.000</td>
          <td>087883505580</td>
          <td>Newton Timur No.28</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Ryan Pramana</td>
          <td>Trainer</td>
          <td>Rp.700.000</td>
          <td>087883606680</td>
          <td>Newton Barat No.29</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Johannes Immanuel</td>
          <td>Trainer</td>
          <td>Rp.1.400.000</td>
          <td>082883626682</td>
          <td>Newton Utara No.12</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Monica Devi Kristiadi</td>
          <td>Trainer</td>
          <td>Rp.2.500.000</td>
          <td>087443606640</td>
          <td>Newton Selatan No.1</td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Wendy</td>
          <td>Coordinator</td>
          <td>Rp.5.700.000</td>
          <td>0812139927805</td>
          <td>Newton Pusat No.14</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>