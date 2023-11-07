<?php include("./header.php"); ?>
<div class="wrapper">
    <?php include('./components/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <?php include('./components/navuser.php'); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="m-0">ข่าวประชาสัมพันธ์</h2>
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="./home.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ข่าวประชาสัมพันธ์ </li>
                    </ol>
                </div>
            </div>
            <a href=""></a>
        </div>
        <div class="content">
            <div class=" my-3">
                <a href="#" class="btn btn-secondary float-end">เพิ่มข้อมูล + </a>
            </div>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th colspan="2">หัวข้อ</th>
                        <th colspan="3">รายละเอียด</th>
                        <th colspan="">แก้ไข</th>
                        <th colspan="1">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="2">Mark</td>
                        <td colspan="3">Otto</td>
                        <td colspan="0.5"><i class="far fa-edit" style="font-size: 24px;"></i></td>
                        <td><button type="button" class="btn btn-danger">ลบ</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td colspan="2">Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td colspan="0.5"><i class="far fa-edit" style="font-size: 24px;"></i></td>
                        <td colspan="1"><button type="button" class="btn btn-danger">ลบ</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php include("./footer.php") ?>