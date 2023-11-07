<?php include("./header.php"); ?>
<div class="wrapper">
    <?php include('./components/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <?php include('./components/navuser.php'); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="m-0">จัดการรายชื่อนักเรียน</h2>
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="./home.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">จัดการรายชื่อนักเรียน </li>
                    </ol>
                </div>
            </div>
            <a href=""></a>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-sm-6 p-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">จำนวนข่าวประชาสัมพันธ์</h5>
                            <h1>0</h1>
                            <!-- <p class="card-text">0</p> -->
                            <a href="#" class="btn btn-secondary">เพิ่มเติม</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">จำนวนผลงาน</h5>
                            <h1>0</h1>
                            <!-- <p class="card-text">0</p> -->
                            <a href="#" class="btn btn-secondary">เพิ่มเติม</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">จำนวนกิจกรรม</h5>
                            <h1>0</h1>
                            <!-- <p class="card-text">0</p> -->
                            <a href="#" class="btn btn-secondary">เพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./footer.php") ?>