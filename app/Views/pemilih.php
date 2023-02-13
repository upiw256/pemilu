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
          <h5 class="card-title">Pilih Calon</h5>
          <div class="form-group mb-3">
                <label class="d-inline-block mr-3 border border-3 border-dark p-3" id="1">
                    <input type="radio" class="form-check-input" name="pil" value="1">
                    <img src="<?=base_url()?>/1.jpeg" class="img-fluid rounded" width="200" height="200">
                    <P>Nama: </P>
                    <P>Nama: </P>
                </label>
                
                <label class="d-inline-block mr-3 border border-3 border-dark p-3" id="2">
                    <input type="radio" name="pil" class="form-check-input" value="2">
                    <img src="<?=base_url()?>/2.jpeg" class="img-fluid rounded" width="200" height="200">
                    <P>Nama: </P>
                    <P>Nama: </P>
                </label>
            </div>
          <input type="submit" value="Pilih" class="btn btn-primary form-control">
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
            });
            pil2.addEventListener("click", function(){
              pil2.style.backgroundColor = "#0D6EFD"
              pil1.style.backgroundColor = "";
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