<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Football Players - มีรายละเอียดทีมและตำแหน่งของFootball Players</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/css.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href=""><i class="fas fa-futbol"></i>  Football Players</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="http://localhost/php%20oop%20mvc%20crud%20-%20json%20data%20(mysql-teamfootball%20%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B8%94%E0%B8%B5)/webSciShort-master/view_Player.php">หน้าแรก</a></li>

                    <li class="nav-item"><a class="nav-link" href="./view/form_add_Player.php"
                            target="_blank">เพิ่มรายชื่อFootball Players</a></li>
                </ul>

                <form action="search.php" method="get">
                <!-- <label for="browser">Choose your browser from the list:</label> -->
                <input list="position" id="positions" name="positions">
    <datalist id="position">
    <option value="Defender">
    <option value="Goalkeeper">
    <option value="Striker">
    <option value="Midfielder 2">
    <option value="Midfielder 1">
    </datalist>
                <!-- <form class="d-flex" action="search.php" method="get">      
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="positions" autocomplete="off"> -->
                    <button class="btn btn-light" type="submit" value="Search">Search</button> 
                </form>

            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-or-conts py-1">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center green-website-5-hex ">
                <h1 class="display-4 fw-bolder">Football Players</h1>
                <p class="lead fw-normal text-50 mb-0">มีรายละเอียดทีมและตำแหน่งของFootball Players</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "termfootball";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['positions']))
    {
        $positions = $conn->escape_string($_GET['positions']);
        $query =  $conn->query("
            SELECT *
            FROM playerlist 
            WHERE first_name LIKE '%{$positions}%' or position LIKE '%{$positions}%'
        ");
?>

    <?php
        if($query->num_rows){
            while($r = $query->fetch_object()){
    ?>        
    <!-- "identifier": 1003,
    "first_name": "Hector",
    "last_name": "Bellerin",
    "team": "Arsenal",
    "position": "Defender",
    "image": "hectorbellerin.jpg" -->
            <!-- Course section -->
            <div class="col mb-5">
                <div class="card h-150">
                    <a href="controller/con_view_Player.php?identifier=<?=$r->identifier;?>" class="card-link">
                        <!-- Product image-->
                        <img class="card-img-top" src="images/<?=$r->image;?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-left">
                                <!-- Product name-->
                                <h5 class="fw-bolder course-name"><?=$r->first_name;?></h5>
                                <!-- course tag line-->
                                <div class="course-note"></i> นามสกุล <?=$r->last_name;?></div>
                                <div class="course-note"></i> ตำแหน่ง <?=$r->position;?></div>
                                <div class="course-note"></i> ทีม <?=$r->team;?></div>
                                <!-- <div class="course-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                <!-- <div class="course-note"><i class="far fa-building"></i> มหาวิทยาลัยราชภัฏนครปฐม</div> -->
                                <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Course section -->
        <?php
            }
        }
    }
?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-success text-white">
        <div class="container-fluid">
            <p class="m-0 text-center text-white">
                Fédération Internationale de Football Association
                <br>
                <!-- <a href="#">web'dev by Kingzlab | Illustration by SaNeKi | credit </a> -->
            </p>

        </div>

    </footer>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
