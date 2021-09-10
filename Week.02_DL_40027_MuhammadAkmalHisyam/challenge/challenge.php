<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

  <title>Challenge</title>

  <style>
    td.details-control {
      background: url('./icons/details_open.png') no-repeat center center;
      cursor: pointer;
    }

    tr.shown td.details-control {
      background: url('./icons/details_close.png') no-repeat center center;
    }
  </style>
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
            <li class="active"><a href="#">Employees</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="employees" class="employees">
      <div class="container">
        <table id="employeesTable" class="table table-striped table-bordered" style="width: 100%">
          <thead>
            <tr>
              <th></th>
              <th>Last Name</th>
              <th>Title</th>
              <th>Extension</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Last Name</th>
              <th>Title</th>
              <th>Extension</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>
  </main>

  <script>
    function format(d) {
      return `<table class="table" cellpadding="5" cellspacing="0" border="0" style="padding-left: 50px;">
        <tr>
          <td>Full name:</td>
          <td>${d.FirstName} ${d.LastName}</td>
        </tr>
        <tr>
          <td>Birth Date:</td>
          <td>${d.BirthDate}</td>
        </tr>
        <tr>
          <td>Address:</td>
          <td>${d.Address}</td>
        </tr>
        <tr>
          <td>City:</td>
          <td>${d.City}</td>
        </tr>
        <tr>
          <td>Home Phone:</td>
          <td>${d.HomePhone}</td>
        </tr>
      </table>`;
    }

    $(document).ready(function() {
      var table = $('#employeesTable').DataTable({
        "ajax": "fetch.php",
        "columns": [{
            "className": 'details-control',
            "orderable": false,
            "data": null,
            "defaultContent": ''
          },
          {
            "data": "LastName"
          },
          {
            "data": "Title"
          },
          {
            "data": "Extension"
          }
        ],
        "order": [
          [1, 'asc']
        ]
      });

      $('#employeesTable tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          row.child.hide();
          tr.removeClass('shown');
        } else {
          row.child(format(row.data())).show();
          tr.addClass('shown');
        }
      });
    });
  </script>
</body>

</html>