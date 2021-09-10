<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

  <title>Tugas</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">[IF635] Web Programming</a>
        </div>
        <div>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Student</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <form action="add_student.php" method="post">
        <div class="form-group">
          <label for="student_id">Student ID</label>
          <input type="text" class="form-control" placeholder="Student ID" id="student_id" name="student_id">
        </div>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name">
        </div>
        <div class="form-group">
          <label for="student_desc">Description</label>
          <textarea class="form-control" placeholder="Description" id="student_desc" name="student_desc" rows="5"></textarea>
        </div>
        <div>
          <button class="btn btn-primary" name="submit">Submit</button>
          <button type="button" class="btn btn-default" onclick="window.location.href='students.php'">Cancel</button>
        </div>
      </form>
      <?php
      if (isset($_POST['submit'])) {
        $student_id = $_POST['student_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $student_desc = $_POST['student_desc'];
        include_once("config.php");
        $query = "INSERT INTO students (student_id, first_name, last_name, student_desc) VALUES('$student_id', '$first_name', '$last_name', '$student_desc')";
        $result = $conn->query($query);
        if ($result) {
          header("Location: students.php");
        } else {
          die("Tambah mahasiswa gagal!");
        }
      }
      ?>
    </div>
  </main>

</body>

</html>