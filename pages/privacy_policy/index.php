

<?php


include('../../server/database.php');

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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus aliquam architecto blanditiis commodi cumque deleniti eaque earum eius esse, eum exercitationem iusto, modi molestiae mollitia nisi quam quasi quia quis quod rem reprehenderit sed
                    sit totam veritatis. Ab atque dicta earum excepturi facere fuga illum incidunt, iste labore magnam neque repellat vero voluptates. At consectetur corporis deleniti error ipsum.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus aliquam architecto blanditiis commodi cumque deleniti eaque earum eius esse, eum exercitationem iusto, modi molestiae mollitia nisi quam quasi quia quis quod rem reprehenderit sed
                    sit totam veritatis.
                </p>

                <h4 class="text-lg">Prohibitions</h4>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea illo minus perspiciatis quia ratione. Eum harum nobis possimus quo voluptate. A accusamus alias architecto blanditiis cupiditate debitis deserunt dolorum earum eligendi
                    error esse eum fuga fugiat ipsa magni maxime neque nesciunt, nihil nostrum, possimus quaerat quas quibusdam quisquam quos repellat tenetur ut! Deleniti id, inventore ipsa modi nesciunt officiis repellendus! Harum labore officiis ratione
                    totam velit? Consequatur, dolor libero.</p>

                <h4 class="text-lg">Terms of Sale</h4>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea illo minus perspiciatis quia ratione. Eum harum nobis possimus quo voluptate. A accusamus alias architecto blanditiis cupiditate debitis deserunt dolorum earum eligendi
                    error esse eum fuga fugiat ipsa magni maxime neque nesciunt, nihil nostrum, possimus quaerat quas quibusdam quisquam quos repellat tenetur ut! Deleniti id, inventore ipsa modi nesciunt officiis repellendus! Harum labore officiis ratione
                    totam velit? Consequatur, dolor libero.</p>

                <h4 class="text-lg">Disclaimer of Liability</h4>
                <p class="mb-4">A accusamus alias architecto blanditiis cupiditate debitis deserunt dolorum earum eligendi error esse eum fuga fugiat ipsa magni maxime neque nesciunt, nihil nostrum, possimus quaerat quas quibusdam quisquam quos repellat tenetur ut! Deleniti
                    id, inventore ipsa modi nesciunt officiis repellendus! Harum labore officiis ratione totam velit? Consequatur, dolor libero.</p>

                <h4 class="text-lg">Complaints</h4>
                <p class="">Eum harum nobis possimus quo voluptate. A accusamus alias architecto blanditiis cupiditate debitis deserunt dolorum earum eligendi error esse eum fuga fugiat ipsa magni maxime neque nesciunt.</p>
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