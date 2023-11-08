<?php include("./header.php"); ?>
<div class="wrapper">
    <?php include('./components/sidebar.php'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <?php include('./components/navuser.php'); ?>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="m-0">ภาพกิจกรรม</h2>
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ภาพกิจกรรม </li>
                    </ol>
                </div>
            </div>
            <a href=""></a>
        </div>
        <div class="content">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th colspan="2">หัวข้อ</th>
                        <th colspan="3">รูปภาพ</th>
                        <th colspan="1">เพิ่มรูป</th>
                        <th colspan="1">แก้ไข</th>
                        <th colspan="1">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td colspan="2">Mark</td>
                        <td colspan="3">Otto</td>
                        <td colspan="0.5"><a href="./insterActivity_pictures.php" class="btn btn-secondary"><i class="fa-solid fa-circle-plus"></a></td>
                        <td colspan="0.5"><a href="./editActivity_pictures.php" class="btn btn-secondary"><i class="far fa-edit" style="font-size: 24px;"></i></a></td>
                        <td colspan="1"><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style='font-size:24px'></i></i></button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td colspan="2">Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td colspan="0.5"><a href="./insterActivity_pictures.php" class="btn btn-secondary"><i class="fa-solid fa-circle-plus"></a></td>
                        <td colspan="0.5"><a href="./editActivity_pictures.php" class="btn btn-secondary"><i class="far fa-edit" style="font-size: 24px;"></i></a></td>
                        <td colspan="1"><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style='font-size:24px'></i></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php include("./footer.php") ?>