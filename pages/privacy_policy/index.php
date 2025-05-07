

<?php


include('../../server/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sitename ?> || Privacy</title>
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
        <a href="<?php echo "$domain" ?>/index.php" class="flex  items-center">
            <span class="text-primary">
                <svg width="17" height="17" viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                </svg></span>
            <span>
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
            </span>

        </a>
        <a href="#" class="text-secondary text-[13px] sm:text-base">Privacy Policy</a>
    </div>
    <!-- breadcrumbs end-->

    <!-- privacy policy page -->
    <div class="container pb-14">
    <h2 class="text-3xl text-center mb-8 ">Privacy Policy</h2>
    <div class="max-w-[1000px] mx-auto">
        <div class="privacy_content">
            <p class="mb-3">
                At Benco Fashion, we value your privacy and are committed to protecting your personal information. This policy outlines how we collect, use, and safeguard your data when you visit our website or make a purchase. We only collect the necessary information to fulfill your orders, improve your shopping experience, and communicate with you effectively.
            </p>
            <p class="mb-4">
                By using our website, you agree to the collection and use of information in accordance with this policy. We ensure your data is handled securely and will never sell or share your personal details with third parties without your consent, except when required by law.
            </p>

            <h4 class="text-lg">Prohibitions</h4>
            <p class="mb-4">
                You are prohibited from misusing this website. You must not commit or encourage a criminal offense, transmit or distribute a virus, or post any other malicious or harmful content. Breaching these terms may result in termination of your access and legal action if necessary.
            </p>

            <h4 class="text-lg">Terms of Sale</h4>
            <p class="mb-4">
                All orders placed through our website are subject to availability and confirmation of the order price. We reserve the right to refuse or cancel any order. Payment must be authorized before your order is processed. Pricing, promotions, and availability may change at any time without notice.
            </p>

            <h4 class="text-lg">Disclaimer of Liability</h4>
            <p class="mb-4">
                While we strive to ensure all information on our website is accurate and up to date, Benco Fashion does not guarantee that product descriptions or other content are free of errors. We are not liable for any damages arising from your use of the website or the purchase of any products.
            </p>

            <h4 class="text-lg">Complaints</h4>
            <p class="">
                If you have a concern or complaint about a product or your experience with Benco Fashion, please contact our customer service team. We are committed to resolving issues promptly and ensuring customer satisfaction.
            </p>
        </div>
    </div>
</div>


    <!-- footer area -->
    <?php
    include('../../components/footer/index.php');
    
    ?>
    <!-- footer area end -->

    
    <!-- copyright end -->

    <!-- script -->
    <script src="../../assets/js/nice-select2.js"></script>
    <script src="../../assets/js/main.js"></script>
</body>

</html>