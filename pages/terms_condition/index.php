<?php


include('../../server/connection.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || Terms_condition</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/nice-select2.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script defer src="../../assets/js/alpine.min.js"></script>
</head>

<body>
    <!--Preloader-->
    <div x-data="{hide: false}" x-init="setTimeout(() => {hide=true}, 1000)" x-show="!hide" x-transition.duration.500ms class="preloader fixed inset-0 bg-white z-30 opacity-100 flex items-center justify-center">
        <img src="../../assets/images/preloader.gif" alt="" class="w-[30rem] h-[30rem] object-cover">
    </div>
    <!--Preloader end-->


    <?php
    include('../../components/nav/index.php');

    ?>

    <!-- breadcrumbs -->
    <div class="container py-5 flex items-center">
        <a href="<?php echo "$domain"  ?>/index.php" class="flex  items-center">
            <span class="text-primary">
                <svg width="17" height="17" viewBox="0 0 32 32">
                    <path fill="currentColor" d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                </svg></span>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
                </svg>
            </span>

        </a>
        <a href="#" class="text-secondary text-[13px] sm:text-base">Terms & Conditions</a>
    </div>
    <!-- breadcrumbs end-->

    <!-- privacy policy page -->
    <div class="container pb-14">
        <h2 class="text-3xl text-center mb-8 ">Terms & Conditions</h2>
        <div class="max-w-[1000px] mx-auto">
            <div class="privacy_content">
                <p class="mb-3">
                    By engaging with our services, you acknowledge and agree to the following terms:
                </p>
                <p class="mb-4">
                    You are prohibited from engaging in any activities that violate local or international laws, infringe upon the rights of others, or disrupt the integrity of our platform. This includes but is not limited to fraudulent behavior, unauthorized access, and abusive conduct.

                </p>

                <h4 class="text-lg">Prohibitions</h4>
                <p class="mb-4">Terms of Service

                    Your use of our services constitutes acceptance of these terms. We reserve the right to modify or terminate services at any time without prior notice. We are not liable for any damages resulting from the use of our services.
                </p>

                <h4 class="text-lg">Terms of Sale</h4>
                <p class="mb-4">Limitation of Liability

                    We do not assume liability for any direct or indirect damages, including but not limited to loss of profits, data, or goodwill, arising from the use of our services. We strive to provide accurate and reliable information, but we cannot guarantee the completeness or accuracy of the content.</p>



                <h4 class="text-lg">Complaints</h4>
                <p class="mb-4"> If you have any concerns or complaints regarding our services, please contact our customer support team. We are committed to resolving issues promptly and fairly.
                </p>

                <h4 class="text-lg">Entire Agreement</h4>
                <p>
                    These terms constitute the entire agreement between you and us regarding the use of our services, superseding any prior agreements or understandings. Any modifications to these terms must be agreed upon in writing by both parties.

                </p>
            </div>
        </div>
    </div>







    <!-- footer area -->
    <?php
    include('../../components/footer/index.php');

    ?>
    <!-- footer area end -->

    <!-- copyright -->

    <!-- copyright end -->

    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>