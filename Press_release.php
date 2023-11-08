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
                <!-- <a href="#" class="btn btn-secondary float-end">เพิ่มข้อมูล + </a> -->
                <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    เพิ่มข้อมูล +
                </button>
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
                        <td colspan="0.5"><button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#exampleModaledit"><i class="far fa-edit" style="font-size: 24px;"></i></button></td>
                        <td><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style='font-size:24px'></i></i></button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td colspan="2">Jacob</td>
                        <td colspan="3">Thornton</td>
                        <td colspan="0.5"><button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#exampleModaledit"><i class="far fa-edit" style="font-size: 24px;"></i></button></td>
                        <td colspan="1"><button type="button" class="btn btn-danger"><i class='fas fa-trash-alt' style='font-size:24px'></i></i></button></td>
                    </tr>

                </tbody>
            </table>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขข่าวประชาสัมพันธ์</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>ห้วข้อข่าว :</h5>
                            <input type="email" class="form-control" id="floatingInputValue">
                            <h5>รายละเอียด :</h5>
                            <textarea class="form-control" placeholder="รายละเอียด" id="floatingTextarea2" style="height: 100px"></textarea>
                            <h5>รูปปกข่าว :</h5>
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <h5>รูปภาพเพิ่มเติม :</h5>
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-secondary">บันทึกข้อมูล</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข่าวประชาสัมพันธ์</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>ห้วข้อข่าว :</h5>
                            <input type="email" class="form-control" id="floatingInputValue">
                            <h5>รายละเอียด :</h5>
                            <textarea class="form-control" placeholder="รายละเอียด" id="floatingTextarea2" style="height: 100px"></textarea>
                            <h5>รูปปกข่าว :</h5>
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <h5>รูปภาพเพิ่มเติม :</h5>
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        </div>
                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-secondary">บันทึกข้อมูล</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./footer.php") ?>