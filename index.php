<?php include("./header.php") ?>
<?php include("./components/navbar.php") ?>

<div class="container">
    <div class="mt-3"></div>

    <div class="row justify-content-center">
        <!-- <div class="col-12 col-md-6 col-lg-6"> -->


        <div class="row justify-content-center p-4">
            <div class="col-12 col-md-6 col-lg-6">

                <!-- Box ที่สอง -->
                <div class="box">
                    <div class="box-content" id="box1">
                        <div class="text-center">
                            <h2>ลงชื่อเข้าใช้งาน</h2>
                        </div>
                        <!-- ... (เนื้อหาของกล่องแรก) ... -->
                    </div>
                    <div class="text-center">
                        เข้าสู่ระบบบริการข้อมูลนักเรียน
                    </div>
                    <!-- ... (เนื้อหาของกล่องที่สอง) ... -->

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-6">
                            <label for="">ชื่อผู้ใช้ :</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="email" class="form-control" name="email" id="emailcheck" placeholder="ชื่อผู้ใช้" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <label for="">รหัสผ่าน :</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon2"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" id="paswordcheck" name="password" placeholder="รหัสผ่าน" aria-label="Password" aria-describedby="basic-addon2">
                            </div>
                           <a href="./home.php.php" id="login" class="form-control">เข้าสู่ระบบ</a>
                           <!-- <input type="submit" value="เข้าสู่ระบบ" id="login" class="form-control">  -->
                            <div class="text-center">
                                <h5>- หรือ -</h5>
                            </div>
                            
                            <input type="submit" value="ลืมรหัสผ่าน" id="Forgotyourpassword" class="form-control" >
                        </div>
                    </div>
                    
                    <div class="row justify-content-center p-2">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="icondoc"><i class="fa-solid fa-file-circle-question"></i></span>
                                <a href="./pages/doc" class="form-control" id="doc" name="doc" aria-describedby="icondoc">คู่มือการใช้งาน</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- </div> -->
    </div>


</div>
<!-- <script>
    $(document).ready(function() {
        const Url = './servers/function';
        const Method = 'POST';
        $("#login").click(function() {
            $.ajax({
                url: Url,
                type: Method,
                data: {
                    function: "login",
                    email: $("#emailcheck").val(),
                    password: $("#paswordcheck").val()
                },
                success: function(res) {
                    // console.log(res);
                    var data = JSON.parse(res)
                    console.log(data);
                    if (data.statusCode == 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Success'
                        }).then(function() {
                            localStorage.setItem("user_id", data.user_id)
                            localStorage.setItem("user_name", data.user_name)
                            window.location.href = "./pages/student_classroom/"
                        });

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login error'
                        }).then(function() {
                            window.location.reload()
                        });
                    }
                }
            })
        })

    })
</script> -->


<?php include("./footer.php") ?>
<!-- <form action="./action.php" method="POST" enctype="multipart/form-data">
        <label for="excel_file">Choose an Excel file:</label>
        <input type="file" name="excel_file" id="excel_file">
        <input type="submit" value="Upload">
    </form> -->