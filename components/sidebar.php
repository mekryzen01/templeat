<aside class="sidebar bg-dark">
    <a href="http://localhost/importexcel/pages/student_classroom/" class="brand-link">
        <img src="http://localhost/importexcel/images/teacher_1048950.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light menu-text">Students Classroom</span>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active d-inline-block" style="font-size: 20px;" href="http://localhost/importexcel/pages/student_classroom/">
            <i class="fa-solid fa-house spani"></i><span class="menu-text">หน้าหลัก</span>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link active d-inline-block" style="font-size: 20px;" href="">
                <i class="fa-sharp fa-solid fa-person-shelter spani"></i><span class="menu-text">ชั้นเรียน</span>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link d-inline-block" style="font-size: 20px;" href="http://localhost/importexcel/pages/student_classroom/year">
                <i class="fa-solid fa-calendar-days spani"></i><span class="menu-text">เทอม/ปี</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-inline-block" style="font-size: 20px;" href="http://localhost/importexcel/pages/student_classroom/report_check">
            <i class="fa-solid fa-file spani" ></i><span class="menu-text">รายงาน</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link d-inline-block" style="font-size: 20px;" href="#submenu-product" data-bs-toggle="collapse">
                <i class="fa-solid fa-basket-shopping spani"></i><span class="menu-text">Product</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="submenu-product">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link sub d-inline-block" style="font-size: 20px;" href="http://localhost/project-6001/pages/stock">
                            <i class="fa-solid fa-list-check"></i> Manageproduct
                        </a>
                    </li>
                </ul>
            </div>
        </li> -->
        <!-- <li class="nav-item">
            <a class="nav-link d-inline-block" style="font-size: 20px;" href="http://localhost/project-6001/pages/report">
                <i class="fa-regular fa-file"></i><span class="menu-text"> Report</span>
            </a>
        </li> -->
    </ul>

</aside>
<script>
      $.ajax({
        url: "../../servers/function",
        type: "POST",
        data: {
            function: "get_userbyid",
            user_id: localStorage.getItem("user_id")
        },
        success: function (res) {
            var datas = JSON.parse(res)
            $("#imageUser").attr('src', datas[0].image_user).show();
            $("#fullnameNav").html(datas[0].user_name)
        }
    })
</script>