<?php 
  include_once("../model/ConDB.php");
  include_once("../model/Player.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link href="css/cite.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Add jQuery library -->
<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

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
<?php
        // "identifier": 1003,
        // "first_name": "Hector",
        // "last_name": "Bellerin",
        // "team": "Arsenal",
        // "position": "Defender",
        // "image": "hectorbellerin.jpg"
  $identifier = htmlspecialchars($_GET["identifier"]);
  
  $obj_name = new Player();
  // $rs2 = $obj_name->getPlayerDetail($identifier)
    $rsJSON2 = $obj_name->getPlayerDetail($identifier);
 
    $rs2 = json_decode($rsJSON2, JSON_OBJECT_AS_ARRAY);//แปลงค่า JSON object $rsJSON2 เป็นค่า array
    //เรียกใช้ที่


?>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container">

      <a class="navbar-brand " href="../view_Player.php"><i class="fas fa-angle-left"></i> Football Players</a>
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
    <!-- Header-->
    <header class="bg-or-conts py-1">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center green-website-5-hex ">
                <h1 class="display-4 fw-bolder">แก้ไขFootball Players</h1>
                <p class="lead fw-normal text-50 mb-0">มีรายละเอียดทีมและตำแหน่งของFootball Players</p>
            </div>
        </div>
    </header>
</br>
</br>
</br>
<div class="container">
<div class="row">
<div class="col-md-2">
</div>


<div class="col-md-8">
	<form name="frmadd"  method="post" action="../controller/con_edit_Player.php" enctype="multipart/form-data">
		
		<input name="identifier" type="hidden" id="ID" value="<?php echo $rs2['identifier'];?>">

      <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">ตำแหน่ง</label>
      <div class="col-sm-10">
      <input type="text" name="position" class="form-control" id="position" value="<?php echo $rs2['position'];?>">
      </div>
  </div>

  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">ชื่อ</label>
      <div class="col-sm-10">
        <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $rs2['first_name'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">นามสกุล</label>
      <div class="col-sm-10">
        <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $rs2['last_name'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ทีม</label>
      <div class="col-sm-10">
        <input type="text" name="team" class="form-control" id="team" value="<?php echo $rs2['team'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">รูป</label>
      <div class="col-sm-10">
        <input type="text" name="image" class="form-control" id="image" value="<?php echo $rs2['image'];?>">
      </div>
  </div>


  <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
    <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-pencil-square" aria-hidden="true"></i>แก้ไขข้อมูล</button>    
  </div>

</div>


	</form>



 
</div>


<div class="col-md-2">
</div>
</div>
</div>
</br>
</br>
</br>
<footer class="py-5 bg-success text-white">
        <div class="container-fluid">
            <p class="m-0 text-center text-white">
                Fédération Internationale de Football Association
                <br>
                <!-- <a href="#">web'dev by Kingzlab | Illustration by SaNeKi | credit </a> -->
            </p>

        </div>

    </footer>
</body>
</html>