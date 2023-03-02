<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Football Players - มีรายละเอียดทีมและตำแหน่งของFootball Players</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <!-- <link href="css/styles.css" rel="stylesheet" /> -->

  <link href="../css/styles.css" rel="stylesheet" />
  <link href="../css/css.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
  <script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6146da0840d29100191b272f&product=inline-share-buttons"
    async="async"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container">

      <a class="navbar-brand " href="../"><i class="fas fa-angle-left"></i> Football Players</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item "><a class="nav-link " aria-current="page"
              href="http://localhost/php%20oop%20mvc%20crud%20-%20json%20data%20(mysql-teamfootball%20%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%94%E0%B8%B5)/webSciShort-master/view_Player.php">หน้าแรก</a></li>

          <!-- <li class="nav-item bg-or-3 rounded"><a class="nav-link text-light ms-2 ms-md-auto" href="../">หลักสูตรทั้งหมด</a></li> -->
        </ul>
      </div>
    </div>
</nav>

<header class="bg-or-conts py-1">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center green-website-5-hex ">
                <h1 class="display-4 fw-bolder">Football Players</h1>
                <p class="lead fw-normal text-50 mb-0">มีรายละเอียดทีมและตำแหน่งของFootball Players</p>
            </div>
        </div>
</header>

<div class="card text-center" style="width:100%;">
  <br>
  <br>  
  <img src="../images/Edit.png" class="rounded mx-auto d-block" alt="..." width="450px" height="450px">
  <div class="card-body">
    <br>
    <br>
    <h5 class="card-title">ข้อมูลอันนี้ถูกแก้ไขแล้ว</h5>
    <p class="card-text">คุณได้ทำการแก้ไขข้อมูลเสร็จสิ้น ข้อมูลชุดนี้ได้รับการแก้ไขลงระบบแล้ว!!</p>

    <a href="../view_Player.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    <br>
    <br>

  </div>
</div>

<footer class="py-lg-5 bg-green ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;  Nakhon Pathom
        Rajabhat University 2021</p>
    </div>
</footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

<?php
  include_once "../model/ConDB.php";
  include_once "../model/Player.php";

  //สร้างตัวแปร
  $identifier = $_POST['identifier'];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $team = $_POST["team"];
  $position = $_POST["position"];
  $image = $_POST["image"];

  //เรียกใช้
  // "identifier": 1003,
  // "first_name": "Hector",
  // "last_name": "Bellerin",
  // "team": "Arsenal",
  // "position": "Defender",
  // "image": "hectorbellerin.jpg"
  $obj_name=new Player();
  $rs2=$obj_name->editPlayereditPlayer($identifier, 
    $first_name,
    $last_name ,
    $team ,
    $position,
    $image )
?>
</body>
</html>
