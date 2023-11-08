<?php include("./header.php"); ?>
<div class="wrapper">
    <?php include('./components/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <?php include('./components/navuser.php'); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="m-0">เพิ่มข้อมูลบุคลากร</h2>
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูลบุคลากร </li>
                    </ol>
                </div>
            </div>
            <a href=""></a>
        </div>
        <div class="content">
            <h1 class="text-center">เพิ่มข้อมูลบุคลากร</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ชื่อ-สกุล : </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">กลุ่มสาระ : </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ตำแหน่ง :</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">google site :</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">รูปภาพ</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <div class="text-center">
                <a href="./personnel.php" class="btn btn-secondary">บันทึกข้อมูล</a>
            </div>
        </div>
    </div>
    <?php include("./footer.php") ?>