<?php 
$conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}

    if(isset($_POST['thembd'])) {
        $bd_id = $_POST['id'];
        $bd_name = $_POST['fullName'];
        $bd_sex = $_POST['sex'];
        $bd_age = $_POST['age'];
        $bd_bgroup = $_POST['bgroup'];
        $bd_reg_date = $_POST['date'];
        $bd_phno = $_POST['sdt']; 

        $sql_insert = "INSERT into blood_donor(bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno)
            values (' $bd_id',' $bd_name','$bd_sex','$bd_age','$bd_bgroupg','$bd_reg_date','$bd_phno')";
            
        mysqli_query($conn,$sql_insert);
        header('location: index.php');

    }
?>

    <?php
        include('partials/header.php');
    ?>
    <?php $conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
        if (!$conn) {
            die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
        }
        $sql_dv = "select * from blood_donor";
        $result_dv = mysqli_query($conn,$sql_dv);
    ?>
    <div class="container">
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="id" class="form-label">Mã</label>
                <input type="text" name="id" class="form-control" id="id" >
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Họ và Tên</label>
                <input type="text" name="fullName" class="form-control" id="fullName" >
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">Giới tính</label>
                <input type="text" name="sex" class="form-control" id="sex" >
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Tuổi</label>
                <input type="text" name="age" class="form-control" id="age" >
            </div>
            <div class="mb-3">
                <label for="bgroup" class="form-label">Nhóm máu</label>
                <input type="text" name="bgroup" class="form-control" id="bgroup" >
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Ngày đăng ký</label>
                <input type="text" name="date" class="form-control" id="date" >
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">SĐT</label>
                <input type="text" name="sdt" class="form-control" id="sdt" >
            </div>
            <button type="submit" class="btn btn-dark mt-3 mb-4" name="thembd">Thêm</button>
        </form>
    </div>
<?php 
include('partials/footer.php');
?>
