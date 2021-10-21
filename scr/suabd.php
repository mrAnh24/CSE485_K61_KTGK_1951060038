<?php 
$conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số khai báo kết nối");
}


    if(isset($_POST['submit'])) {
        $bd_id = $_POST['id'];
        $bd_name = $_POST['fullName'];
        $bd_sex = $_POST['sex'];
        $bd_age = $_POST['age'];
        $bd_bgroup = $_POST['bgroup'];
        $bd_reg_date = $_POST['date'];
        $bd_phno = $_POST['sdt']; 

        $sql_update = "UPDATE blood_donor set fullName = '$bd_name',sex = '$bd_sex',age = '$bd_age',bgroup ='$bd_bgroup',date ='$bd_reg_date',sdt ='$bd_phno' where id = '$bd_id' ";
        $result = mysqli_query($conn,$sql_update);
        header('location: index.php');
    }
?>


    <?php
        include('partials/header.php');
    ?>
    <?php $conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
        $sql_dv = "select * from blood_donor";
        $result_dv = mysqli_query($conn,$sql_dv);
        if (!$conn) {
            die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
        }
        if(isset($_GET['bd_id'])) {
            $id = $_GET['bd_id'];

            $sql = "SELECT * from  blood_donor where bd_id = '$id'";
            $result = mysqli_query($conn, $sql);
        }
    ?>
    <div class="container">
        <?php while($row = mysqli_fetch_assoc($result)){?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="id" class="form-label">Mã</label>
                <input type="text" name="id" class="form-control" id="id" value="<?php echo $row['bd_id']; ?>">
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Họ và Tên</label>
                <input type="text" name="fullName" class="form-control" id="fullName" value="<?php echo $row['bd_name']; ?>">
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">Giới tính</label>
                <input type="text" name="sex" class="form-control" id="sex" value="<?php echo $row['bd_sex']; ?>">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Tuổi</label>
                <input type="text" name="age" class="form-control" id="age" value="<?php echo $row['bd_age']; ?>">
            </div>
            <div class="mb-3">
                <label for="bgroup" class="form-label">Nhóm máu</label>
                <input type="text" name="bgroup" class="form-control" id="bgroup" value="<?php echo $row['bd_bgroup']; ?>">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Ngày đăng ký</label>
                <input type="text" name="date" class="form-control" id="date" value="<?php echo $row['bd_reg_date']; ?>">
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">Số điện thoại</label>
                <input type="text" name="sdt" class="form-control" id="sdt" value="<?php echo $row['bd_phno']; ?>">

            <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row['bd_id']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
        </form>
        <?php } ?>
    </div>
<?php 
include('partials/footer.php');
?>