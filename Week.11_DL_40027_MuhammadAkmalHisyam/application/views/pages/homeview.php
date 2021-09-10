<!DOCTYPE html>
<html lang="en">

<head>
  <?= $js; ?>
  <?= $css; ?>
  <title>Week 11</title>
</head>

<body>
  <?= $header; ?>

  <div class="container">
    <h1>Manage Products</h1>
    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 12px;">
      <h4 style="margin: auto 0; color: #777;">Northwind Traders</h4>
      <a href="index.php/insert" style="float: right;"><button class="btn btn-primary">Add Product</button></a>
    </div>
    <hr>
    <table class="table table-striped table-bordered" id="productTable">
      <thead>
        <tr>
          <th></th>
          <th>Product Name</th>
          <th>Quantity per Unit</th>
          <th>Price</th>
          <th>Available Stock</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($product as $row) :
          $id_product = $row['id_product'];
          $product_name = $row['product_name'];
          $qty_per_unit = $row['qty_per_unit'];
          $price = $row['price'];
          $stock = $row['stock'];
        ?>
          <tr>
            <td><?= $id_product; ?></td>
            <td><?= $product_name; ?></td>
            <td><?= $qty_per_unit; ?></td>
            <td><?= $price; ?></td>
            <td><?= $stock; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <th></th>
          <th>Product Name</th>
          <th>Quantity per Unit</th>
          <th>Price</th>
          <th>Available Stock</th>
        </tr>
      </tfoot>
    </table>
  </div>

  <?= $footer; ?>
</body>

</html>