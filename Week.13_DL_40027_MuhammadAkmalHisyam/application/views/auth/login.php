<div class="container">
  <div class="loginForm">
    <?= form_open('home') ?>
    <h2 class="text-center">Sign In</h2>
    <hr>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" class="form-control">
      <small class="text-danger"><?= form_error('email'); ?></small>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="form-control">
      <small class="text-danger"><?= form_error('password'); ?></small>
    </div>
    <button class="btn btn-success btn-block" style="margin-bottom: 12px;">Submit</button>
    <?= form_close(); ?>
    <?= $this->session->flashdata('message'); ?>
  </div>
</div>