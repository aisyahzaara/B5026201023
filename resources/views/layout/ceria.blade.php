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

    <title>@yield('title')</title>
    <style>
    *{
	list-style: none;
	text-decoration: none;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
}
body{
	background: #f5f6fa;
}
.wrapper .sidebar{
	background: rgb(5, 68, 104);
	position: fixed;
	top: 0;
	left: 0;
	width: 225px;
	height: 100%;
	padding: 20px 0;
	transition: all 0.5s ease;
    overflow: auto;
}
.wrapper .sidebar .profile{
	margin-bottom: 30px;
	text-align: center;
}
.wrapper .sidebar .profile img{
	display: block;
	width: 110px;
	height: 110px;
    border-radius: 50%;
	margin: 0 auto;
}
.wrapper .sidebar .profile h3{
	color: #ffffff;
	margin: 10px 0 5px;
    font-size: 23px
}
.wrapper .sidebar .profile p{
	color: rgb(206, 240, 253);
	font-size: 15px;
}
    .menu-head {
    text-transform: uppercase;
    color: #8da2fb;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
    margin-left: 0.8rem;
    }
    .wrapper .sidebar ul li a{
	display: block;
	padding: 13px 30px;
	border-bottom: 1px solid #10558d;
	color: rgb(241, 237, 237);
	font-size: 16px;
	position: relative;
}
.wrapper .sidebar ul li a .icon{
	color: #dee4ec;
	width: 30px;
	display: inline-block;
}
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
	color: #0c7db1;
	background:white;
    border-right: 2px solid rgb(5, 68, 104);
}
.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
	color: #0c7db1;
}
.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
	display: block;
}
.wrapper .section{
	width: calc(100% - 225px);
	margin-left: 225px;
	transition: all 0.5s ease;
}
.wrapper .section .top_navbar{
	background: rgb(7, 105, 185);
	height: 50px;
	display: flex;
	align-items: center;
	padding: 0 30px;
}
.wrapper .section .top_navbar .hamburger a{
	font-size: 28px;
	color: #f4fbff;
}
.wrapper .section .top_navbar .hamburger a:hover{
	color: #a2ecff;
}
body.active .wrapper .sidebar{
	left: -225px;
}
body.active .wrapper .section{
	margin-left: 0;
	width: 100%;
}

    </style>
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
        </div>
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


