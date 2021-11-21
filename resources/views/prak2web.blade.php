<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Form Validation</title>
  </head>
  <body>

    <div class="container">
      <div class="header">
        <h2>Registration Form</h2>
      </div>

    <form "name="formPendaftaran" class="row needs-validation" novalidate>

      <div class="row mb-3">
        <label for="inputUserId3" class="col-sm-2 col-form-label">User Id</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUserId3" name="inputUserId" required minlength="5" maxlength="12"/>
          <div class="invalid-feedback">Incorrect User Id. You have to enter at least 5 digits!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" name="inputPassword" required/ minlength="7" maxlength="12">
          <div class="invalid-feedback">Incorrect Password. You have to enter at least 7 digits!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputName3" name="inputName" required pattern="[A-Az-a\s]+"/>
          <div class="invalid-feedback">Incorrect Name. Please enter only alphabates!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputAddress3" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputAddress3" name="inputAddress"/>
          <div class="valid-feedback">Optional</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputCountry3" class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-10">
          <select  class="form-control" id="inputCountry3" name="inputCountry" required/>
          <option value="">--Select country--</option>
          <option value="Amerika Serikat">Amerika Serikat</option>
          <option value="Belanda">Belanda</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Inggris">Inggris</option>
          <option value="Italia">Italia</option>
          <option value="Korea Utara">Korea Utara</option>
          <option value="Prancis">Prancis</option>
          <option value="Spanyol">Spanyol</option>
          <option value="Turki">Turki</option>
      </select>
      <div class="invalid-feedback">Please select your country</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputZipCode3" class="col-sm-2 col-form-label">Zip Code</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputZipCode3" name="inputZipCode" required pattern="[0-9]+"/>
          <div class="invalid-feedback">Incorrect Zip Code. Please enter only numeric!</div>
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" name="inputEmail" required/>
          <div class="invalid-feedback">Incorrect email. Please enter valid email!</div>
        </div>
      </div>

      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2">Gender</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" required />
            <label class="form-check-label" for="gridRadios1"> Male </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" required/>
            <label class="form-check-label" for="gridRadios2"> Female </label>
            <div class="invalid-feedback">Please select your gender!</div>
          </div>
        </div>
      </fieldset>

      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Language</legend>
        <div class="col-sm-10" >
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
            <label class="form-check-label" for="flexCheckDefault">English</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">Non-English</label>
              </div>
          </div>
      </fieldset>

      <div class="row mb-3">
        <label for="inputAbout3" class="col-sm-2 col-form-label">About</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" id="inputAbout3" name="inputAbout" rows="10p"></textarea>
          <div class="valid-feedback">Optional</div>
        </div>
        </div>


      <button type="submit">Submit</button>
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

    <style>
      .container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 20px rgb(238, 141, 206);
  width: 60%;
  margin-top: 30px;
  margin-bottom: 50px;
}
body {
  background: linear-gradient(to right, #c6426e, #642b73);
}
.header {
  border-bottom: 1px solid #f0f0f0;
  background-color: #f7f7f7;
  padding: 10px;
  margin-bottom: 30px;
  text-align: center;
}
button {
  background-color: #8e44ad;
  border: 2px solid #8e44ad;
  border-radius: 4px;
  color: #fff;
  display: block;
  font-family: inherit;
  font-size: 16px;
  padding: 10px;
  margin-top: 20px;
  width: 100%;
}

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
