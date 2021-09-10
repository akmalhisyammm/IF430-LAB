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
    <section id="students" class="students">
      <div class="container">
        <div class="row text-right" style="margin-bottom: 12px">
          <div class="col">
            <button class="btn btn-primary" onclick="window.location.href='add_student.php'"><i class="fa fa-plus-circle"></i> Student</button>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
            <table id="studentsTable" class="table table-striped table-bordered" style="width: 100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Student ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include_once("config.php");
                $i = 1;
                $query = "SELECT * FROM students";
                $result = $conn->query($query);
                while ($row = $result->fetch()) {
                  echo "<tr>";
                  echo "<td>" . $i . "</td>";
                  echo "<td>" . $row['student_id'] . "</td>";
                  echo "<td>" . $row['first_name'] . "</td>";
                  echo "<td>" . $row['last_name'] . "</td>";
                  echo "<td><a href='delete_student.php?id=$row[id]' style='color: #000'><i class='fa fa-times-circle'></i></a>" . "<br>" . "<a href='edit_student.php?id=$row[id]' style='color: #000'><i class='fa fa-wrench'></i></a> </td>";
                  echo "</tr>";
                  $i++;
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th>Student ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    $(document).ready(function() {
      $('#studentsTable').DataTable();
    });
  </script>
</body>

</html>