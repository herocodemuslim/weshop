<div class="m-auto form-container">
  <form action="<?=BASE_URL.'proses-register.php'?>" method="GET">

<div class="element-form">
  <label for="nama_lengkap">Nama Lengkap</label>
  <input type="text" name="nama_lengkap">
</div>

<div class="element-form">
  <label for="email">Email</label>
  <input type="email" name="email">
</div>

<div class="element-form">
  <label for="phone">Nomor Telepon / Handphone</label>
  <input type="text" name="phone">
</div>

<div class="element-form">
  <label for="alamat">Alamat</label>
  <textarea name="alamat" cols="20" rows="10"></textarea>
</div>

<div class="element-form">
  <label for="password">Password</label>
  <input type="password" name="password">
</div>

<div class="element-form">
  <label for="re-password">Konfirmasi Password</label>
  <input type="password" name="re_password">
</div>

<button class="btn btn-default btn-full" type="submit">Daftar</button>
  </form>
</div>