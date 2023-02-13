<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
<div class="">
<div class="mb-3">

  <img src="<?= base_url() ?>/logo.png"  alt="Card image cap" width="50" height="50">
  <b>SMAN 1 MARGAASIH</b>
</div>
  <div class="card shadow-lg" style="width: 18rem;">
    <div class="card-body">
        <?php if (session()->getFlashdata('message')) {
          echo '<div class="alert alert-danger">' . session()->getFlashdata('message') . '</div>';
      } ?>
       <?php if (session()->getFlashdata('berhasil')) {
          echo '<div class="alert alert-success">' . session()->getFlashdata('berhasil') . '</div>';
      } ?>
      <form action="/pemilih/auth" method="post">
          <h5 class="card-title">Masukan NIS anda</h5>
          <input type="number" name="nis" class="form-control mb-3" id="input" required>
          <div id="keyboard">
            <div class="key btn btn-secondary mb-2" id="key0">0</div>
            <div class="key btn btn-secondary mb-2" id="key1">1</div>
            <div class="key btn btn-secondary mb-2" id="key2">2</div>
            <div class="key btn btn-secondary mb-2" id="key3">3</div>
            <div class="key btn btn-secondary mb-2" id="key4">4</div>
            <div class="key btn btn-secondary mb-2" id="key5">5</div>
            <div class="key btn btn-secondary mb-2" id="key6">6</div>
            <div class="key btn btn-secondary mb-2" id="key7">7</div>
            <div class="key btn btn-secondary mb-2" id="key8">8</div>
            <div class="key btn btn-secondary mb-2" id="key9">9</div>
            <div class="key btn btn-secondary mb-2" id="keyClear">Bersihkan</div>
          </div>
          <input type="submit" value="Masuk" class="btn btn-primary form-control">
      </form>
    </div>
  </div>
</div>
</div>
      <script>
        document.addEventListener("contextmenu", function(e){
        e.preventDefault();
      }, false);
      const keyboard = document.querySelector("#keyboard");
      const keys = keyboard.querySelectorAll(".key");
      const input = document.querySelector("#input");

      keys.forEach(key => {
        key.addEventListener("click", () => {
      if (key.id === "keyClear") {
        input.value = "";
      }else {
        const keyValue = key.innerHTML;
        input.value += keyValue;
      }
        });
      });
      </script>
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>