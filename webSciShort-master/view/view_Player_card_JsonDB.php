 <?php 
    //เชื่อมต่อข้อมูล
    include_once "model/ConDB.php";
    include_once "model/Player.php";
    //สร้างตัวแปร
    $obj_name=new Player();
    //$rs2= $obj_name->getPlayer();
    $rsJSON2 = $obj_name->getPlayerJsonDB();
 
    $rs2 = json_decode($rsJSON2, JSON_OBJECT_AS_ARRAY);//แปลงค่า JSON object $rsJSON2 เป็นค่า array
    //เรียกใช้ที่
    foreach ($rs2 as $result2){
    ?>
    <!-- Player section -->
    <div class="col mb-5">
                            
                    <div class="card h-150">
                            <a href="controller/con_view_Player.php?identifier=<?=$result2['identifier']?>" class="card-link">
                                <!-- Product image-->
                                <img class="card-img-top" src="images/<?=$result2['image'];?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                <div class="text-left">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder Player-name"><?=$result2['first_name'];?></h5> 
                                        <!-- Player tag line-->
                                        <div class="Player-note"></i> นามสกุล <?=$result2['last_name'];?></div>
                                        <div class="Player-note"></i> ทีม <?=$result2['team'];?></div>
                                        <!-- <div class="Player-note"><i class="fab fa-internet-explorer"></i> -</div> -->
                                        <!-- <div class="Player-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                                        <div class="Player-note"></i> ตำแหน่ง <?=$result2['position'];?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
    <!-- End Player section -->
<?php }?>