<?php





include('../../server/database.php');

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
    <!--Preloader-->
    <div x-data="{hide: false}" x-init="setTimeout(() => {hide=true}, 1000)" x-show="!hide" x-transition.duration.500ms class="preloader fixed inset-0 bg-white z-30 opacity-100 flex items-center justify-center">
        <img src="../../assets/images/preloader.gif" alt="" class="w-[30rem] h-[30rem] object-cover">
    </div>
    <!--Preloader end-->



   

    <!-- breadcrumbs -->
    <div class="container">
        <div class="py-5 flex items-center">
            <a href="<?php echo "$domain" ?>/index.php" class="flex  items-center">
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
            <a href="#" class="text-secondary text-[13px] sm:text-base"> F.A.Q </a>
        </div>
    </div>
    <!-- breadcrumbs end-->

    <!-- faq page -->
    <div class="container pb-14">
        <h2 class="text-3xl mb-2">F.A.Q</h2>
        <p class="mb-4 pb-2">Can’t find the answer you’re looking for? We’ve shared some <br class="d-none d-md-block"> of your most frequently asked questions to help you out!</p>

        <div class="w-[1000px]" x-data="accordianModules">
            <template x-for="(acc,accIndex) in accordians">
                <div>
                    <h4 class="text-2xl mt-4 mb-4" x-text="acc.section"></h4>
                    <div class="border rounded">
                        <template x-for="(faq, faqIndex) in acc.faqs">
                            <div class="accordion-item">
                                <div @click="toggleFaq(accIndex, faqIndex)" :class="faq.isOpen ? 'text-primary !font-normal' : ''" class="border-b px-5 py-4 cursor-pointer flex justify-between w-full">
                                    <h2 x-text="faq.question"></h2>
                                    <span :class="faq.isOpen ? 'text-primary rotate-180' : ''" class="transition duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                                        </svg>
                                    </span>
                                </div>
                                <div x-show="faq.isOpen" x-text="faq.answer" class="accordion-body border-b px-4 py-5">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </template>
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
    <script>
        const accordianModules = {
            accordians: [{
                    section: 'Shipping Information',
                    faqs: [{
                            question: 'How will my parcel be deliverd?',
                            answer: 'Your parcel will be delivered with care and efficiency. We partner with trusted courier services to ensure timely and secure delivery to your doorstep. Upon dispatch, you will receive a tracking number via email, allowing you to monitor your parcels journey every step of the way. Rest assured, we prioritize the safety of your items throughout the delivery process. If you have any specific delivery preferences or concerns, feel free to reach out to our customer support team, and we ll be happy to assist you',
                            isOpen: true
                        },
                        {
                            question: 'Do I pay for delivery?',
                            answer: 'We offer various delivery options to cater to your needs. Depending on your location, order value, and chosen delivery method, there may be a delivery fee associated with your purchase. However, we often run promotions or offer free shipping for orders above a certain amount. During the checkout process, you will see the available delivery options along with any associated costs before finalizing your purchase. Rest assured, we strive to keep our delivery charges fair and transparent. If you have any further questions regarding delivery fees or options, please dont hesitate to contact our customer support team for assistance.',
                            isOpen: false
                        },
                        {
                            question: 'How will my parcel be deliverd?',
                            answer: 'Your parcel will be delivered using trusted courier services that prioritize safe and timely delivery. Upon dispatch, youll receive a tracking number via email, allowing you to monitor your parcels journey until it reaches your doorstep. We ensure that your items are handled with care throughout the delivery process. If you have any specific delivery preferences or concerns, please feel free to reach out to our customer support team for assistance',
                            isOpen: false
                        },

                    ]
                },
                {
                    section: 'Orders And Returns',
                    faqs: [{
                            question: 'Tracking my order?',
                            answer: "Check your email inbox for an order confirmation email. This email typically includes a tracking number and a link to the courier's website Click on the tracking number provided in the email to be directed to the courier's tracking page Enter the tracking number into the designated field on the courier's website and click 'Track' or 'Submit' to view the status of your order. You'll be able to see real-time updates on the location and estimated delivery time of your parcel as it makes its way to you If you encounter any issues with tracking your order or have further questions, feel free to reach out to our customer support team for assistance. We're here to help!",
                            isOpen: false
                        },
                        {
                            question: "I haven't recived my order",
                            answer: 'Check Tracking: Look up your order s tracking number provided in the confirmation email to see its status Review Delivery Estimate: Make sure to check the estimated delivery date provided during checkout.Contact Courier: If there s  an issue with the delivery, contact the courier directly for more information Contact Seller: If you re still having trouble, reach out to the seller or website s customer support Stay Patient: Sometimes delays happen, but keep following up until the issue is resolved.',
                            isOpen: false
                        },
                        {
                            question: 'How can I return on item?',
                            answer: 'Check Policy: Read the seller s return policy to see if your item qualifies Start Return: Log in to your account, find your order, and request a return Provide Info: Select the item, give a reason, and choose refund or exchange Print Label: If given, print the return label and attach it to the package Pack and Ship: Put the item in a box, ship it back using the label or courier of your choice Track Return: Keep an eye on the return shipment using the tracking number Wait for Refund: Once the seller gets the return, they ll refund you Follow Up: If you dont hear back contact the sellers support.',
                            isOpen: false
                        },
                        {
                            question: 'How will my parcel be deliverd?',
                            answer: 'Your parcel will be delivered by trusted couriers. Once dispatched, youll receive a tracking number via email. This lets you monitor its journey until it arrives. We ensure your items are handled with care throughout. If you have specific preferences, let us know.',
                            isOpen: false
                        }
                    ]
                },
                {
                    section: 'Payments',
                    faqs: [{
                            question: 'What payment types can i use?',
                            answer: 'You can use various payment methods, including credit/debit cards, PayPal, and sometimes alternative options like Apple Pay or Google Pay. We aim to offer convenient and secure payment options to suit your needs.',
                            isOpen: false
                        },
                        {
                            question: 'Can I pay by gift Card?',
                            answer: 'Yes, you can often pay using gift cards. We accept a range of gift cards, including those from major retailers and our own branded gift cards. During checkout, simply select the option to pay with a gift card and follow the prompts to enter the card details. If you encounter any issues, feel free to reach out to our customer support team for assistance.',
                            isOpen: false
                        },
                        {
                            question: "I can't make a payment",
                            answer: 'Check Details: Make sure your payment info is correct.Try Another Way: Use a different payment method if possible.Check Balance: Make sure you have enough money in your account or on your gift card.Contact Bank: Ask your bank if there s a problem on their end Clear Browser: Try clearing your browsers cache or use a different one Contact Support: If all else fails, get in touch with our support team for help.',
                            isOpen: false
                        },
                        {
                            question: "Has my payment gone though",
                            answer: 'Check Confirmation Email: Look for a confirmation email from the seller or payment processor. This email typically confirms your order and payment status.Check Bank Statement: Review your bank or credit card statement to see if the payment has been deducted. It may take a few days for the transaction to appear.Check Order Status: Log in to your account on the sellers website and check your order history or dashboard to see if the order is marked as paid or completed Contact Seller: If youre still unsure, contact the seller s customer support team. They can verify the payment status and provide assistance if needed These steps should help you confirm whether your payment has gone through successfully',
                            isOpen: false
                        }
                    ]
                }
            ],
            toggleFaq(accIndex, faqIndex) {
                if (this.accordians[accIndex].faqs[faqIndex].isOpen) {
                    this.accordians[accIndex].faqs[faqIndex].isOpen = false
                } else {
                    this.accordians.forEach(acc => {
                        acc.faqs.forEach(faq => faq.isOpen = false)
                    })
                    this.accordians[accIndex].faqs[faqIndex].isOpen = true
                }
            }

        }
    </script>
</body>

</html>