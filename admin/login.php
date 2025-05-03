<?php

include('../server/database.php');
// include('../server/model.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = mysqli_query($connection, "SELECT `id` FROM `admin` WHERE `email`='$email' AND `password`='$password'");


    if (mysqli_num_rows($select)) {
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];
            $_SESSION['admin_id'] = $id;
            echo "<script>
            alert('you have successfully loged in');

                 window.open('./users.php','_self')
                
                  </script>
                  ";
        }
    } else {
        echo "<script>
                 
        alert('an error occured when logging in')
                  </script>
                  ";
    }
}


?>
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Sign In | <?php echo $sitename ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="FIRSTCLASS THEBEST" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Icons CSS -->

    <!-- Tailwind CSS -->


    <link rel="stylesheet" href="assets/css/tailwind2.css">
</head>

<body class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public">

    <div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
        <div class="!px-10 !py-12 card-body">
            <div class="mt-8 text-center">
                <h4 class="mb-2 text-purple-500 dark:text-purple-500">Welcome Back !</h4>
                <p class="text-slate-500 dark:text-zink-200">Sign in to <?php echo $sitename ?> admin page</p>
            </div>

            <form method="POST" class="mt-10" id="signInForm">

                <div class="mb-3">
                    <label for="username" class="inline-block mb-2 text-base font-medium">Email ID</label>
                    <input type="text" id="username" name="email" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter username or email">
                    <div id="username-error" class="hidden mt-1 text-sm text-red-500">Please enter a valid email address.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
                    <input type="password" name="password" id="password" class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter password">

                </div>

                <div class="mt-10">
                    <button name="login" type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign In</button>
                </div>


            </form>
        </div>
    </div>

    <script src='assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>
    <script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/tippy.js/tippy-bundle.umd.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/lucide/umd/lucide.js"></script>
    <script src="assets/js/tailwick.bundle.js"></script>
 
</body>


</html>