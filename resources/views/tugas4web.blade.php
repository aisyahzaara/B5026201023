<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        const password = $("#password");
        $("#eye").click(function () {
          if (password.prop("type") == "password") {
            $(this).addClass("fa-eye-slash");
            password.attr("type", "text");
          } else {
            $(this).removeClass("fa-eye-slash");
            password.attr("type", "password");
          }
        });
      });
    </script>

    <style>
      body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Montserrat";
        background-color: rgb(253, 255, 240);
      }
      .container {
        display: flex;
        position: relative;
      }
      #password {
        outline: none;
        border: none;
        padding: 10px;
        border-radius: 25px;
        min-width: 500px;
        box-shadow: 0 0 10px #000;
        font-size: 1.5rem;
      }
      #eye {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 1.5rem;
      }
    </style>
    <title>Hide Show</title>
  </head>
  <body>
    <div class="container">
      <input id="password" type="password" placeholder="Enter your password" />
      <i id="eye" class="fa-fa-eye"></i>
    </div>
  </body>
</html>
