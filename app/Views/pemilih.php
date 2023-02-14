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
  <div class="card shadow-lg">
    <div class="card-body">
      <form action="/pemilih/pilih" method="post">
          <h5 class="card-title">Pilih Calon (klik salah satu)</h5>
          <h5>
            Data Pemilih: <br>
            NIS: <?= $nis ?> <br>
            Nama: <?= $nama ?> <br>
            Kelas: <?= $kelas ?>
          </h5>
          <div class="form-group mb-3">
                <label class="d-inline-block mr-3 p-3 border border-2 border-primary" id="1">
                  <div class="d-flex justify-content-center flex-column flex-wrap">
                    <input type="radio" class="form-check-input" name="pil" value="1">
                    <img src="<?=base_url()?>/1.jpeg" class="img-fluid rounded" width="200" height="200">
                    <P>Nama: Azhar Fatwa Nugraha (XI IPA 1) </P>
                    <P>Nama: Rameyshanda Pudjianti Putri (XI IPA 3) </P>
                  </div>
                </label>
                
                <label class="d-inline-block mr-3 p-3 border border-2 border-primary" id="2">
                  <div class="d-flex justify-content-center flex-column flex-wrap">
                    <input type="radio" name="pil" class="form-check-input" value="2">
                    <img src="<?=base_url()?>/2.jpeg" class="img-fluid rounded" width="200" height="200">
                    <P>Nama: Aditya Pasha Priwardhana (XI IPA 3)</P>
                    <P>Nama: Sherla Devita (XI IPA 6)</P>
                  </div>
                </label>
            </div>
          <input type="submit" value="Pilih" id="submitBtn" class="btn btn-primary form-control" disabled>
          <script>
            const radios = document.querySelectorAll('input[type="radio"]');
            const pil1=document.getElementById('1')
            const pil2=document.getElementById('2')
            //radios.style.display = 'none';
            radios.forEach(radio => {
              radio.style.display = 'none';
            });
            pil1.addEventListener("click", function(){
              pil1.style.backgroundColor = "#0D6EFD"
              pil2.style.backgroundColor =""
              pil1.style.color="#F5EFE0"
              pil2.style.color="#212529"
              document.getElementById("submitBtn").disabled = false;
            });
            pil2.addEventListener("click", function(){
              pil2.style.backgroundColor = "#0D6EFD"
              pil1.style.backgroundColor = "";
              pil2.style.color="#F5EFE0"
              pil1.style.color="#212529"
              document.getElementById("submitBtn").disabled = false;
            });
            document.addEventListener("contextmenu", function(e){
              e.preventDefault();
            }, false);
          </script>
      </form>
    </div>
  </div>
</div>
</div>
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>