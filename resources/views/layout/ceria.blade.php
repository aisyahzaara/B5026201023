<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <link rel="stylesheet" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css" />

    <link rel="stylesheet" href="/css/ceria.css">
    <title>@yield('title')</title>

</head>
<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <div class="wrapper">
      <div class="sidebar">
            <div class="profile">
                <img src="/img/foto_aisyah_round.png" alt="profile_picture">
                <h3>Aisyah Zahrah</h3>
                <p>5026201023</p>
            </div>
            <div class="menu-head">
                <span class="fas fa-tasks"></span>
                <span>Tugas</span>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="item">Tugas 1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Tugas 2</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Tugas 3</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Tugas 4</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Tugas PHP</span>
                    </a>
                </li>
            </ul>
            <div class="menu-head">
                <span class="fas fa-brain"></span>
                <span>Praktikum</span>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <span class="item">Praktikum 1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Praktikum 2</span>
                    </a>
                </li>
            </ul>
            <div class="menu-head">
                <span class="fas fa-table"></span>
                <span>Tabel</span>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <span class="item">Tabel Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">Tabel Absen</span>
                    </a>
                </li>
            </ul>
            <div class="menu-head">
                <span class="fad fa-clipboard"></span>
                <span>Ujian</span>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <span class="item">ETS</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="item">EAS</span>
                    </a>
                </li>
            </ul>
       </div>

    <div class="section">
        <div class="top_navbar">
          <div class="hamburger">
            <a href="#">
              <i class="fas fa-bars"></i>
            </a>
          </div>
        </div>
    <div class="container m-4">
        @section('isikonten');
        @show;
    </div>


      <!-- partial:index.partial.html -->
      <footer class="new_footer_area bg_color" style="margin-top: 5rem; width:100%" >
        <div class="new_footer_top">
          <div class="container"></div>
          <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
          </div>
        </div>
        <div class="footer_bottom">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-7">
                <p class="mb-0 f_400">© Hak Cipta oleh 5026201023 - Aisyah Zahrah.</p>
              </div>
              <div class="col-lg-6 col-sm-5 text-right">
                <p>Made with <i class="icon_heart"></i> in <a href="#">CakeCounter</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- partial -->

    </div>
<script>
   var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })

    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    }
  </script>
</body>
</html>


