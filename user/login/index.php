<?php
include('../../server/connection.php');
// include('../../server/config.php');




if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $statement = "SELECT * FROM `client` WHERE  `email`='$email' AND `password`='$password'";
    $query = mysqli_query($connection, $statement);

    if (empty($email) || empty($password)) {
        echo "<script>alert('Email and password cannot be empty');</script>";
    } else {

        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                $_SESSION['login_id'] = $id;

                echo "<script>window.location.href = '../dashboard/index.php';</script>";
            }
        } else {
            echo "<script>alert('this user is not found')</script>";
        }
    }
} else {
}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafcart-Tailwind</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/nice-select2.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script defer src="../../assets/js/alpine.min.js"></script>
</head>

<body>





    <?php
    include('../../components/loader/Preloader.php');
    include('../../components/nav/index.php');
    ?>

    <!-- breadcrumbs -->
    <div class="container py-5 flex items-center">
        <a href="index-1.html" class="flex  items-center">
            <span class="text-primary">
                <svg width="17" height="17" viewBox="0 0 32 32">
                    <path fill="currentColor" d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                </svg>
            </span>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
                </svg>
            </span>

        </a>
        <a href="#" class="text-secondary text-[13px] sm:text-base"> Login </a>
    </div>
    <!-- breadcrumbs end-->

    <!--Login wrap-->
    <div class="w-full max-w-[500px] mx-auto box_shadow rounded px-[30px] py-[24px] mb-14">
        <h4 class="text-[28px] uppercase font-medium">Login</h4>
        <p class="mb-4 text_md">Login if you a a returing customer</p>
        <form method="POST">
            <div>
                <div>
                    <label class="block">Email Address <span class="text-primary">*</span></label>
                    <input class="w-full border border-[#E9E4E4] rounded focus:ring-0 focus:border-primary mt-1" type="email" name="email" placeholder="example@mail.com">
                </div>
                <div class="mt-4">
                    <label class="block">Password <span class="text-primary">*</span></label>
                    <input class="w-full border border-[#E9E4E4] rounded focus:ring-0 focus:border-primary mt-1" type="password" name="password" placeholder="type password">
                </div>

                <div class="flex justify-between items-center mt-6">
                    <div class="flex gap-3 items-center">
                        <input type="checkbox" class="focus:ring-0 text-primary border border-primary focus:bg-primary focus:outline-none" id="save-default">
                        <label for="save-default" class="text-sm sm:text-base">Remember Me</label>
                    </div>
                    <div>
                    
                    </div>
                </div>



            </div>
            <div class="mt-4">
                <button type="submit" class="default_btn rounded w-full" name="submit">Login</button>
            </div>
        </form>



        <p class="text-center mt-3 mb-0">Don't have an account.? <a href="register.html" class="text-primary">Register
                Now</a></p>
    </div>

    <!-- footer area -->
    <?php
    include('../../components/footer/index.php');
    ?>
    <!-- copyright end -->

    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>