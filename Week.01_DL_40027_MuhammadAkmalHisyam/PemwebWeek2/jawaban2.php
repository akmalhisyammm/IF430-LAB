<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">

  <title>Jawaban 2</title>
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
            <li class="active"><a href="#">Products</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="products" class="products">
      <div class="container">
        <table id="products-table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Quantity per Unit</th>
              <th>Price</th>
              <th>Stock</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $products = array(
              "Chai" => array(
                "quantityPerUnit" => "10 boxes x 20 bags",
                "price" => 18.0000,
                "stock" => 39
              ),
              "Chang" => array(
                "quantityPerUnit" => "24 - 12 oz bottles",
                "price" => 19.0000,
                "stock" => 17
              ),
              "Aniseed Syrup" => array(
                "quantityPerUnit" => "12 - 550 ml bottles",
                "price" => 10.0000,
                "stock" => 13
              ),
              "Chef Anton's Cajun Seasoning" => array(
                "quantityPerUnit" => "48 - 6 oz jars",
                "price" => 22.0000,
                "stock" => 53
              ),
              "Chef Anton's Gumbo Mix" => array(
                "quantityPerUnit" => "36 boxes",
                "price" => 21.3500,
                "stock" => 0
              ),
              "Grandma's Boysenberry Spread" => array(
                "quantityPerUnit" => "12 - 8 oz jars",
                "price" => 25.0000,
                "stock" => 120
              ),
              "Uncle Bob's Organic Dried Pears" => array(
                "quantityPerUnit" => "12 - 1 lb pkgs.",
                "price" => 30.0000,
                "stock" => 15
              ),
              "Northwoods Cranberry Sauce" => array(
                "quantityPerUnit" => "12 - 12 oz jars",
                "price" => 40.0000,
                "stock" => 6
              ),
              "Mishi Kobe Niku" => array(
                "quantityPerUnit" => "18 - 500 g pkgs.",
                "price" => 97.0000,
                "stock" => 29
              ),
              "Ikura" => array(
                "quantityPerUnit" => "12 - 200 ml jars",
                "price" => 31.0000,
                "stock" => 31
              ),
              "Queso Cabrales" => array(
                "quantityPerUnit" => "1 kg pkg.",
                "price" => 21.0000,
                "stock" => 22
              ),
              "Queso Manchego La Pastora" => array(
                "quantityPerUnit" => "10 - 500 g pkgs.",
                "price" => 38.0000,
                "stock" => 86
              )
            );

            $index = 1;
            foreach ($products as $name => $attribute) {
              echo "<tr>
                <td>{$index}</td>
                <td>{$name}</td>
                <td>{$attribute['quantityPerUnit']}</td>
                <td>{$attribute['price']}</td>
                <td>{$attribute['stock']}</td>
              </tr>";
              $index++;
            }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Quantity per Unit</th>
              <th>Price</th>
              <th>Stock</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>
  </main>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(() => {
      $('#products-table').DataTable();
    });
  </script>
</body>

</html>