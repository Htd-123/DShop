<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <h2>Sign in/up Form</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="User" />
                <input type="email" placeholder="Email" name="Email" />
                <input type="password" placeholder="Password" name="Pass" />
                <button>Sign Up</button>
            </form>

            <?php
            /*
            $username = "root"; // Khai báo username
            $password = "";      // Khai báo password
            $server   = "localhost";   // Khai báo server
            $dbname   = "dshop_giay";      // Khai báo database

            // Kết nối database tintuc
            $connect = new mysqli($server, $username, $password, $dbname);

            //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
            if ($connect->connect_error) {
                die("Không kết nối :" . $conn->connect_error);
                exit();
            }

            //Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
            $user = "";
            $email = "";
            $pass = "";

            //Lấy giá trị POST từ form vừa submit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["User"])) {
                    $user = $_POST['User'];
                }
                if (isset($_POST["Email"])) {
                    $email = $_POST['Email'];
                }
                if (isset($_POST["Pass"])) {
                    $pass = $_POST['Pass'];
                }

                //Code xử lý, insert dữ liệu vào table
                $sql = "INSERT INTO thongtintaikhoan (ten,taikhoan,matkhau) VALUES ('$user','$email', '$pass')";

                if ($connect->query($sql) === TRUE) {
                    echo "Thêm dữ liệu thành công";
                } else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
            }
            //Đóng database
            $connect->close();*/
            ?>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <a href="#">Forgot your password?</a>
                <button name="btn_signin" value="signIn">Sign In</button>
            </form>
            <?php


            // //Lấy giá trị POST từ form vừa submit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $tk = $_POST["email"];
                $mk = $_POST["password"];
                //$rows = mysqli_query($connect, "
                //select * from thongtintaikhoan where taikhoan = '$tk' and matkhau = '$mk'");
                //$count = mysqli_num_rows($rows);
                if ($tk == 'danh@123' && $mk == "123") {
                    header("Location: http://localhost/San%20Pham%20D%20Shop/upvex-admin-dashboard/index.php");
                    exit;
                }
            }
            ?>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./login.js"></script>
</body>

</html>