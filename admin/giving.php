<?php

include('../server/database.php');
// include('../server/admin/authoriazation/index.php');


$thestatus = '';
$pageName = "ALL Clients ";


if (isset($_GET['del_id'])) {
         $del_id =  $_GET['del_id'];


         $uppdate_clients = mysqli_query($connection, "DELETE FROM client WHERE id='$del_id'");


         if ($uppdate_clients) {
                  echo "<script>
                  window.open('./users.php?del_id','_self')
             }
                  ;
                  </script>
                  ";
         } else {
                  echo "<script>
                  window.open('./users.php?del_id','_self')
                  </script>
                  ";
         }
}

// if (isset($_GET['rej_id'])) {
//          $rej_id =  $_GET['rej_id'];
//          $uppdate = mysqli_query($connection, "UPDATE loan_application SET `status`='Rejected' WHERE `application_id`='$rej_id'");

//          if ($uppdate) {
//                   echo "<script>
//                   window.onload = ()=>{
//                       Model('Great news! User deposit request has been Declined successfully.', 'green');

//                       window.open('./giving.php')
//              }
//                   ;
//                   </script>
//                   ";
//          } else {
//                   echo "<script>
//                   window.onload = ()=>{
//                       Model('Error occurs when decline user deposit request.', 'red');
//              }
//                   ;
//                   </script>
//                   ";
//          }
// }

?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>

         <meta charset="utf-8">
         <title><?php echo $sitename .  '-' . $pageName ?> </title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
         <meta content="Minimal Admin & Dashboard Template" name="description">
         <meta content="Themesdesign" name="author">
         <!-- App favicon -->
         <link rel="shortcut icon" href="assets/images/favicon.ico">
         <!-- Layout config Js -->
         <script src="assets/js/layout.js"></script>
         <link rel="stylesheet" href="assets/css/tailwind2.css">
</head>

<body class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">
         <div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">


                  <?php include('./components/sidenav.php') ?>

                  <!-- Left Sidebar End -->
                  <div id="sidebar-overlay" class="absolute inset-0 z-[1002] bg-slate-500/30 hidden"></div>
                  <?php include('./components/horizontal.php') ?>



                  <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

                           <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
                                    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                                             <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                                                      <div class="grow">
                                                               <h5 class="text-16"><?php echo $pageName ?></h5>
                                                      </div>
                                                      <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                                                               <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                                                                        <a href="#!" class="text-slate-400 dark:text-zink-200">Loan</a>
                                                               </li>
                                                               <li class="text-slate-700 dark:text-zink-100">
                                                                        <?php echo $pageName ?>
                                                               </li>
                                                      </ul>
                                             </div>


                                             <div class="card">
                                                      <div class="card-body">
                                                               <h6 class="mb-4 text-15">Users Table</h6>
                                                               <table id="basic_tables" class="display stripe group" style="width:100%">
                                                                        <thead>
                                                                                 <tr>
                                                                                          <th class="ltr:!text-left rtl:!text-right">#</th>
                                                                                          <th>Name</th>

                                                                                          <th>Email</th>
                                                                                          <th>Phone</th>
                                                                                          <th>status</th>
                                                                                         
                                                                                 </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                                 <?php

                                                                                 $select = mysqli_query($connection, "SELECT * FROM `client`");


                                                                                 $count = 0;
                                                                                 while ($row = mysqli_fetch_assoc($select)) {

                                                                                          $count++;


                                                                                 ?>
                                                                                          <tr>
                                                                                                  <td><?php echo $row['id'] ?></td>    
                                                                                                   <td><?php echo $row['username']  ?></td>
                                                                                                   <td><?php echo $row['email'] ?></td>
                                                                                                   <td><?php echo $row['phone_number'] ?></td>
                                                                                                   
                                                                                                
           

                                                                                                   <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                                                                                            <div class="relative dropdown">
                                                                                                                     <button id="orderAction1" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                                                                                     <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="orderAction1">
                                                                                                                              <!-- <li>
                                                                                                                                       <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-order-overview.html"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                                                                                              </li> -->
                                                                                                                              <li>
                                                                                                                                       <a data-modal-target="addOrderModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="./edit.php?edit_id=<?php echo $row['id'] ?>"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                                                                                              </li>
                                                                                                                              <li>
                                                                                                                                       <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="./users.php?del_id=<?php echo $row['id'] ?>"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                                                                                              </li>
                                                                                                                     </ul>
                                                                                                            </div>
                                                                                                   </td>



                                                                                          </tr>

                                                                                 <?php } ?>



                                                                        </tbody>
                                                                        <!-- <tfoot>
                                                                                 <tr>
                                                                                          <th>Name</th>
                                                                                          <th>Position</th>
                                                                                          <th>Office</th>
                                                                                          <th>Age</th>
                                                                                          <th>Start date</th>
                                                                                          <th>Salary</th>
                                                                                 </tr>
                                                                        </tfoot> -->
                                                               </table>
                                                      </div>
                                             </div><!--end card-->



                                    </div>
                                    <!-- container-fluid -->
                           </div>
                           <!-- End Page-wrapper -->

                           <?php include('./components/footer.php') ?>
                  </div>

         </div>
         <!-- end main content -->

         <div class="fixed items-center hidden bottom-6 right-12 h-header group-data-[navbar=hidden]:flex">
                  <button data-drawer-target="customizerButton" type="button" class="inline-flex items-center justify-center w-12 h-12 p-0 transition-all duration-200 ease-linear rounded-md shadow-lg text-sky-50 bg-sky-500">
                           <i data-lucide="settings" class="inline-block w-5 h-5"></i>
                  </button>
         </div>

         <div id="customizerButton" drawer-end class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-96 z-drawer show dark:bg-zink-600">
                  <div class="flex justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                           <div class="grow">
                                    <h5 class="mb-1 text-16">Tailwick Theme Customizer</h5>
                                    <p class="font-normal text-slate-500 dark:text-zink-200">Choose your themes & layouts etc.</p>
                           </div>
                           <div class="shrink-0">
                                    <button data-drawer-close="customizerButton" class="transition-all duration-150 ease-linear text-slate-500 hover:text-slate-800 dark:text-zink-200 dark:hover:text-zink-50"><i data-lucide="x" class="w-4 h-4"></i></button>
                           </div>
                  </div>
                  <div class="h-full p-6 overflow-y-auto">
                           <div>
                                    <h5 class="mb-3 underline capitalize text-15">Choose Layouts</h5>
                                    <div class="grid grid-cols-1 mb-5 gap-7 sm:grid-cols-2">
                                             <div class="relative">
                                                      <input id="layout-one" name="dataLayout" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="vertical" checked>
                                                      <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500" for="layout-one">
                                                               <span class="flex h-full gap-0">
                                                                        <span class="shrink-0">
                                                                                 <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500">
                                                                                          <span class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                 </span>
                                                                        </span>
                                                                        <span class="grow">
                                                                                 <span class="flex flex-col h-full">
                                                                                          <span class="block h-3 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block h-3 mt-auto bg-slate-100 dark:bg-zink-500"></span>
                                                                                 </span>
                                                                        </span>
                                                               </span>
                                                      </label>
                                                      <h5 class="mt-2 text-center text-15">Vertical</h5>
                                             </div>

                                             <div class="relative">
                                                      <input id="layout-two" name="dataLayout" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="horizontal">
                                                      <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500" for="layout-two">
                                                               <span class="flex flex-col h-full gap-1">
                                                                        <span class="flex items-center gap-1 p-1 bg-slate-100 dark:bg-zink-500">
                                                                                 <span class="block p-1 ml-1 bg-white rounded dark:bg-zink-500"></span>
                                                                                 <span class="block p-1 px-2 pb-0 bg-white dark:bg-zink-500 ms-auto"></span>
                                                                                 <span class="block p-1 px-2 pb-0 bg-white dark:bg-zink-500"></span>
                                                                        </span>
                                                                        <span class="block p-1 bg-slate-100 dark:bg-zink-500"></span>
                                                                        <span class="block p-1 mt-auto bg-slate-100 dark:bg-zink-500"></span>
                                                               </span>
                                                      </label>
                                                      <h5 class="mt-2 text-center text-15">Horizontal</h5>
                                             </div>
                                    </div>

                                    <div id="semi-dark">
                                             <div class="flex items-center">
                                                      <div class="relative inline-block w-10 mr-2 align-middle transition duration-200 ease-in">
                                                               <input type="checkbox" name="customDefaultSwitch" value="dark" id="customDefaultSwitch" class="absolute block w-5 h-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 bg-white/80 peer/published checked:bg-white checked:right-0 checked:border-custom-500 arrow-none dark:border-zink-500 dark:bg-zink-500 dark:checked:bg-zink-400 checked:bg-none">
                                                               <label for="customDefaultSwitch" class="block h-5 overflow-hidden transition duration-300 ease-linear border rounded-full cursor-pointer border-slate-200 bg-slate-200 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500 dark:border-zink-500 dark:bg-zink-600"></label>
                                                      </div>
                                                      <label for="customDefaultSwitch" class="inline-block text-base font-medium">Semi Dark (Sidebar & Header)</label>
                                             </div>
                                    </div>
                           </div>

                           <div class="mt-6">
                                    <!-- data-skin="" -->
                                    <h5 class="mb-3 underline capitalize text-15">Skin Layouts</h5>
                                    <div class="grid grid-cols-1 mb-5 gap-7 sm:grid-cols-2">
                                             <div class="relative">
                                                      <input id="layoutSkitOne" name="dataLayoutSkin" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="default">
                                                      <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500 bg-slate-50 dark:bg-zink-600" for="layoutSkitOne">
                                                               <span class="flex h-full gap-0">
                                                                        <span class="shrink-0">
                                                                                 <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500">
                                                                                          <span class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                 </span>
                                                                        </span>
                                                                        <span class="grow">
                                                                                 <span class="flex flex-col h-full">
                                                                                          <span class="block h-3 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block h-3 mt-auto bg-slate-100 dark:bg-zink-500"></span>
                                                                                 </span>
                                                                        </span>
                                                               </span>
                                                      </label>
                                                      <h5 class="mt-2 text-center text-15">Default</h5>
                                             </div>

                                             <div class="relative">
                                                      <input id="layoutSkitTwo" name="dataLayoutSkin" class="absolute w-4 h-4 border rounded-full appearance-none cursor-pointer ltr:right-2 rtl:left-2 top-2 vertical-menu-btn bg-slate-100 border-slate-300 checked:bg-custom-500 checked:border-custom-500 dark:bg-zink-400 dark:border-zink-500" type="radio" value="bordered" checked>
                                                      <label class="block w-full h-24 p-0 overflow-hidden border rounded-lg cursor-pointer border-slate-200 dark:border-zink-500" for="layoutSkitTwo">
                                                               <span class="flex h-full gap-0">
                                                                        <span class="shrink-0">
                                                                                 <span class="flex flex-col h-full gap-1 p-1 ltr:border-r rtl:border-l border-slate-200 dark:border-zink-500">
                                                                                          <span class="block p-1 px-2 mb-2 rounded bg-slate-100 dark:bg-zink-400"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                          <span class="block p-1 px-2 pb-0 bg-slate-100 dark:bg-zink-500"></span>
                                                                                 </span>
                                                                        </span>
                                                                        <span class="grow">
                                                                                 <span class="flex flex-col h-full">
                                                                                          <span class="block h-3 border-b border-slate-200 dark:border-zink-500"></span>
                                                                                          <span class="block h-3 mt-auto border-t border-slate-200 dark:border-zink-500"></span>
                                                                                 </span>
                                                                        </span>
                                                               </span>
                                                      </label>
                                                      <h5 class="mt-2 text-center text-15">Bordered</h5>
                                             </div>
                                    </div>
                           </div>

                           <div class="mt-6">
                                    <!-- data-mode="" -->
                                    <h5 class="mb-3 underline capitalize text-15">Light & Dark</h5>
                                    <div class="flex gap-3">
                                             <button type="button" id="dataModeOne" name="dataMode" value="light" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Light Mode</button>
                                             <button type="button" id="dataModeTwo" name="dataMode" value="dark" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Dark Mode</button>
                                    </div>
                           </div>

                           <div class="mt-6">
                                    <!-- dir="ltr" -->
                                    <h5 class="mb-3 underline capitalize text-15">LTR & RTL</h5>
                                    <div class="flex flex-wrap gap-3">
                                             <button type="button" id="diractionOne" name="dir" value="ltr" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">LTR Mode</button>
                                             <button type="button" id="diractionTwo" name="dir" value="rtl" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">RTL Mode</button>
                                    </div>
                           </div>

                           <div class="mt-6">
                                    <!-- data-content -->
                                    <h5 class="mb-3 underline capitalize text-15">Content Width</h5>
                                    <div class="flex gap-3">
                                             <button type="button" id="datawidthOne" name="datawidth" value="fluid" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Fluid</button>
                                             <button type="button" id="datawidthTwo" name="datawidth" value="boxed" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Boxed</button>
                                    </div>
                           </div>

                           <div class="mt-6" id="sidebar-size">
                                    <!-- data-sidebar-size="" -->
                                    <h5 class="mb-3 underline capitalize text-15">Sidebar Size</h5>
                                    <div class="flex flex-wrap gap-3">
                                             <button type="button" id="sidebarSizeOne" name="sidebarSize" value="lg" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Default</button>
                                             <button type="button" id="sidebarSizeTwo" name="sidebarSize" value="md" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Compact</button>
                                             <button type="button" id="sidebarSizeThree" name="sidebarSize" value="sm" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Small (Icon)</button>
                                    </div>
                           </div>

                           <div class="mt-6" id="navigation-type">
                                    <!-- data-navbar="" -->
                                    <h5 class="mb-3 underline capitalize text-15">Navigation Type</h5>
                                    <div class="flex flex-wrap gap-3">
                                             <button type="button" id="navbarTwo" name="navbar" value="sticky" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500 active">Sticky</button>
                                             <button type="button" id="navbarOne" name="navbar" value="scroll" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Scroll</button>
                                             <button type="button" id="navbarThree" name="navbar" value="bordered" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Bordered</button>
                                             <button type="button" id="navbarFour" name="navbar" value="hidden" class="transition-all duration-200 ease-linear bg-white border-dashed text-slate-500 btn border-slate-200 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 [&.active]:text-custom-500 [&.active]:bg-custom-50 [&.active]:border-custom-200 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-400 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:hover:border-zink-400 dark:[&.active]:bg-custom-500/10 dark:[&.active]:border-custom-500/30 dark:[&.active]:text-custom-500">Hidden</button>
                                    </div>
                           </div>

                           <div class="mt-6" id="sidebar-color">
                                    <!-- data-sidebar="" light, dark, brand, modern-->
                                    <h5 class="mb-3 underline capitalize text-15">Sizebar Colors</h5>
                                    <div class="flex flex-wrap gap-3">
                                             <button type="button" id="sidebarColorOne" name="sidebarColor" value="light" class="flex items-center justify-center w-10 h-10 bg-white border rounded-md border-slate-200 group active"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-slate-600"></i></button>
                                             <button type="button" id="sidebarColorTwo" name="sidebarColor" value="dark" class="flex items-center justify-center w-10 h-10 border rounded-md border-zink-900 bg-zink-900 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                                             <button type="button" id="sidebarColorThree" name="sidebarColor" value="brand" class="flex items-center justify-center w-10 h-10 border rounded-md border-custom-800 bg-custom-800 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                                             <button type="button" id="sidebarColorFour" name="sidebarColor" value="modern" class="flex items-center justify-center w-10 h-10 border rounded-md border-purple-950 bg-gradient-to-t from-red-400 to-purple-500 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                                    </div>
                           </div>

                           <div class="mt-6">
                                    <!-- data-topbar="" light, dark, brand, modern-->
                                    <h5 class="mb-3 underline capitalize text-15">Topbar Colors</h5>
                                    <div class="flex flex-wrap gap-3">
                                             <button type="button" id="topbarColorOne" name="topbarColor" value="light" class="flex items-center justify-center w-10 h-10 bg-white border rounded-md border-slate-200 group active"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-slate-600"></i></button>
                                             <button type="button" id="topbarColorTwo" name="topbarColor" value="dark" class="flex items-center justify-center w-10 h-10 border rounded-md border-zink-900 bg-zink-900 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                                             <button type="button" id="topbarColorThree" name="topbarColor" value="brand" class="flex items-center justify-center w-10 h-10 border rounded-md border-custom-800 bg-custom-800 group"><i data-lucide="check" class="w-5 h-5 hidden group-[.active]:inline-block text-white"></i></button>
                                    </div>
                           </div>

                  </div>
                  <div class="flex items-center justify-between gap-3 p-4 border-t border-slate-200 dark:border-zink-500">
                           <button type="button" id="reset-layout" class="w-full transition-all duration-200 ease-linear text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100">Reset</button>
                           
                  </div>
         </div>

         <script src='assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>
         <script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>
         <script src="assets/libs/tippy.js/tippy-bundle.umd.min.js"></script>
         <script src="assets/libs/simplebar/simplebar.min.js"></script>
         <script src="assets/libs/prismjs/prism.js"></script>
         <script src="assets/libs/lucide/umd/lucide.js"></script>
         <script src="assets/js/tailwick.bundle.js"></script>
         <script src="assets/js/datatables/jquery-3.7.0.js"></script>
         <script src="assets/js/datatables/data-tables.min.js"></script>
         <script src="assets/js/datatables/data-tables.tailwindcss.min.js"></script>
         <!--buttons dataTables-->
         <script src="assets/js/datatables/datatables.buttons.min.js"></script>
         <script src="assets/js/datatables/jszip.min.js"></script>
         <script src="assets/js/datatables/pdfmake.min.js"></script>
         <script src="assets/js/datatables/buttons.html5.min.js"></script>
         <script src="assets/js/datatables/buttons.print.min.js"></script>
         <script src="assets/js/datatables/datatables.init.js"></script>

         <!-- App js -->
         <script src="assets/js/app.js"></script>




</body>

</html>