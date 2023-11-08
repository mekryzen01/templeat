<?php include("./header.php"); ?>
<div class="wrapper">
    <?php include('./components/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <?php include('./components/navuser.php'); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="m-0">บุคลากร</h2>
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">บุคลากร</li>
                    </ol>
                </div>
            </div>
            <a href=""></a>
        </div>
        <div class="content">
            <a href="./insterpersonnel.php" class="btn btn-secondary">เพิ่มข้อมูล +</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th colspan="2">ชื่อ-นามสกุล</th>
                        <th colspan="3">กลุ่มสาระ</th>
                        <th colspan="3">ตำแหน่ง</th>
                        <th colspan="3">site</th>
                        <th colspan="3">รูปภาพ</th>
                        <th colspan="1">แก้ไข</th>
                        <th colspan="1">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="2">Mark</td>
                        <td colspan="3">Otto</td>
                        <td colspan="3">Otto</td>
                        <td colspan="3">Otto</td>
                        <td colspan="3">Otto</td>
                        <td colspan="1"><a href="./editpersonnel.php" class="btn btn-secondary"><i class="far fa-edit" style="font-size: 24px;"></i></a></td>
                        <td colspan="1"><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style='font-size:24px'></i></i></button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="2">Mark</td>
                        <td colspan="3">Otto</td>
                        <td colspan="3">Otto</td>
                        <td colspan="3">Otto</td>
                        <td colspan="3">Otto</td>
                        <td colspan="1"><a href="./editpersonnel.php" class="btn btn-secondary"><i class="far fa-edit" style="font-size: 24px;"></i></a></td>
                        <td colspan="1"><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style='font-size:24px'></i></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php include("./footer.php") ?>