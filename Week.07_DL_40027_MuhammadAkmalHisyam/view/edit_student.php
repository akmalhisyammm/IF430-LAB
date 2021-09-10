<!DOCTYPE html>
<html>

<head>
  <title>Student Data</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='assets/bootstrap-3.3.7/dist/css/bootstrap.min.css'>
</head>

<body>
  <header>
    <nav class='navbar navbar-default' role='navigation'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <a class='navbar-brand' href='#'>[IF635] Web Programming</a>
        </div>
        <div>
          <ul class='nav navbar-nav navbar-right'>
            <li class='active'>
              <a href='#'>Student</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class='container'>
      <h1 class='text-center'>Update Student</h1>
      <?php
      if (!isset($_POST['submit']) || !isset($_POST['Student_Id'])) header('Location: index.php');
      $sid = mysqli_real_escape_string($conn, strip_tags($_POST['Student_Id']));
      $query = 'SELECT * FROM siswa WHERE Student_Id="' . $sid . '";';
      $result = $conn->query($query);
      if (!$result) header('Location: index.php');
      $row = $result->fetch_assoc();
      ?>
      <form method='post' action='index.php'>
        <div class='form-group row'>
          <label class='col-sm-3' for='sid'>Student ID:</label>
          <div class='col-sm-6'>
            <input class='form-control' type='hidden' name='sid' value='<?php echo $row['Student_Id']; ?>'>
          </div>
          <div class='col-sm-6'>
            <input class='form-control' type='text' name='sidmask' value='<?php echo $row['Student_Id']; ?>' disabled>
          </div>
        </div>
        <div class='form-group row'>
          <label class='col-sm-3' for='sname'>Student Name:</label>
          <div class='col-sm-6'>
            <input class='form-control' type='text' name='sname' value='<?php echo $row['Student_Name']; ?>'>
          </div>
        </div>
        <div class='form-group row'>
          <label class='col-sm-3' for='snim'>Student Nim:</label>
          <div class='col-sm-6'>
            <input class='form-control' type='text' name='snim' value='<?php echo $row['Student_Nim']; ?>'>
          </div>
        </div>
        <div class='form-group row'>
          <label class='col-sm-3' for='sangkatan'>Student Angkatan:</label>
          <div class='col-sm-6'>
            <input class='form-control' type='text' name='sangkatan' value='<?php echo $row['Student_Angkatan']; ?>'>
          </div>
        </div>
        <div class='form-group row'>
          <label class='col-sm-3' for='sjurusan'>Student Jurusan:</label>
          <div class='col-sm-6'>
            <input class='form-control' type='text' name='sjurusan' value='<?php echo $row['Student_Jurusan']; ?>'>
          </div>
        </div>
        <input type='hidden' name='do' value='update_student.php'>
        <button type='submit' name='submit' class='btn btn-primary'>Edit Student</button>
        <button type='submit' name='loc' value='student_data.php' class='btn btn-secondary'>Cancel</button>
      </form>
    </div>
  </main>

  <script src='assets/jquery-3.2.1.min.js'></script>
  <script src='assets/bootstrap-3.3.7/dist/js/bootstrap.min.js'></script>
</body>

</html>