<?php
$conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}

?>
<?php 
include('partials/header.php');
?>
    <main class="bg-white">
        <div class="container">
            <a href="thembd.php" class="mt-4 "><button class="btn btn-dark mt-4">Thêm </button></a>
            <div class="row">
                <div></div>
                <div class="directory-table">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"> STT </th>
                                    <th scope="col"> Mã </th>
                                    <th scope="col"> Họ và tên</th>
                                    <th scope="col"> Giới tính</th>
                                    <th scope="col"> Tuổi</th>
                                    <th scope="col"> Nhóm máu</th>
                                    <th scope="col"> Ngày đăng kí</th>
                                    <th scope="col"> Số điện thoại</th>
                                    <th scope="col"> Sửa</th>
                                    <th scope="col"> Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                                <?php
                                //b1 :ket noi csdl

                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno from blood_donor bd";
                                $result = mysqli_query($conn, $sql);

                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['bd_id']; ?></td>
                                            <td><?php echo $row['bd_name']; ?></td>
                                            <td><?php echo $row['bd_sex']; ?></td>
                                            <td><?php echo $row['bd_age']; ?></td>
                                            <td><?php echo $row['bd_bgroup']; ?></td>
                                            <td><?php echo $row['bd_reg_date']; ?></td>
                                            <td><?php echo $row['bd_phno']; ?></td>                                           
                                            <td><a href="suabd.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="text-dark fas fa-edit"></i></a></td>
                                            <td><a href="xoabd.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="text-dark fas fa-trash-alt"></i></a></td>
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php 
include('partials/footer.php');
?>