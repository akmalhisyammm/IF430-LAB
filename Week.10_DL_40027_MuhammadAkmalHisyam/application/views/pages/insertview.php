<!DOCTYPE html>
<html>

<head>
  <title>Week 11</title>
  <?= $js; ?>
  <?= $css; ?>
</head>

<body>
  <?= $header; ?>
  <div class="container">
    <h1>Add Product</h1>
    <hr>
    <form action="insert/insert_action" method="post">
      <div class="form-group row">
        <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="product_name" id="product_name">
        </div>
      </div>
      <div class="form-group row">
        <label for="id_supplier" class="col-sm-2 col-form-label">Supplier</label>
        <div class="col-sm-10">
          <select name="id_supplier" id="id_supplier" class="form-control">
            <?php foreach ($supplier as $row) :
              $id_supplier = $row['id_supplier'];
              $supplier_name = $row['supplier_name'];
            ?>
              <option value="<?= $id_supplier ?>"><?= $supplier_name; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="id_category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
          <select name="id_category" id="id_category" class="form-control">
            <?php foreach ($category as $row) :
              $id_category = $row['id_category'];
              $category_name = $row['category_name'];
            ?>
              <option value="<?= $id_category; ?>"><?= $category_name; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="qty_per_unit" class="col-sm-2 col-form-label">Quantity per Unit</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="qty_per_unit" id="qty_per_unit">
        </div>
      </div>
      <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="price" id="price">
        </div>
      </div>
      <button class="btn btn-primary">Submit</button>
      <a class="btn btn-default" href="javascript: history.go(-1)">Cancel</a>
    </form>
  </div>
  <?= $footer; ?>
</body>