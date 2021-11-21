<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <style>
.container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 20px rgb(207, 194, 14);
  width: 60%;
  margin-top: 30px;
  margin-bottom: 50px;
}
body {
  background: linear-gradient(to right, #626322, #3f662d);
}
.header {
  border-bottom: 1px solid #f0f0f0;
  background-color: #f7f7f7;
  padding: 10px;
  margin-bottom: 30px;
  text-align: center;
}
button{
  width: 80%;
  height: 40px;
  margin-top: 15px;
  margin-left: 10%;
  margin-right: 10%;
}

    </style>
    <title>Form Validation</title>
  </head>
  <body>

    <!--
        <p> Nama Mahasiswa = Aisyah Zahrah</p>
        <p> Nama panggilan = Aisyah</p>
        <p> NRP = 5026201023</p>
    -->

    <div class="container">
      <div class="header">
        <h2>Form Input Peserta Vaksinasi</h2>
      </div>

    <form "name="formPendaftaran" class="row needs-validation" novalidate>

      <div class="row mb-3">
        <label for="inputNamaPeserta3" class="col-sm-2 col-form-label">Nama Peserta</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputNamaPeserta3" name="inputNamaPeserta" required minlength="10" pattern="^[a-zA-Z ]*$"/>
          <div class="invalid-feedback">Nama Peserta salah. Nama peserta harus alphabet dan minim 10 karakter.</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" name="inputPassword" required minlength="16" maxlength="16" pattern="[0-9]+"/>
          <div class="invalid-feedback">NIK salah. Masukkan NIK yang valid!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputJenisVaksin3" class="col-sm-2 col-form-label">Jenis Vaksin</label>
        <div class="col-sm-10">
          <select  class="form-control" id="inputJenisVaksi3" name="inputJenisVaksin" required/>
          <option value="">--Pilih jenis vaksin--</option>
          <option value="AZ">AZ</option>
          <option value="Sinovac">Sinovac</option>
          <option value="Moderna">Moderna</option>
      </select>
      <div class="invalid-feedback">Pilih jenis vaksin!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputNoBatch3" class="col-sm-2 col-form-label">No Batch</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputNoBatch3" name="inputNoBatch" required pattern="^[A-Za-z0-9]+"/>
          <div class="invalid-feedback">No Batch salah, spasi dan tanda baca lain dilarang!</div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-6">
              <button type="submit" id="submit" value="submit" class="btn btn-primary">Kirim</button>
        </div>
      <div class="col-sm-6">
              <button type="reset" id="reset" value="reset" class="btn btn-success">Reset</button>
      </div>
      </div>
    </form>
    <script>
      var forms = document.querySelectorAll(".needs-validation");
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener("submit", function (event) {

          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
        );
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
