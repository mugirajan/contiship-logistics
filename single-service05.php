<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   $title = 'Service Left';
   include('partials/title-meta.php');
   ?>

   <?php include('partials/head-css.php'); ?>
</head>

<body>

   <?php include('partials/loader.php'); ?>
   <?php include('partials/header/navbar.php'); ?>
   <?php include('partials/header/mobile-nav.php'); ?>

   <!-- main -->
   <main>
      <!-- breadcrumb area start -->
      <section class="ca-breadcrumb-area cream-bg-3 p-relative z-index-1 fix">
         <div class="ca-breadcrumb-shape p-absolute bre-sh-1">
            <img src="assets/img/shape/breadcrumn-shape.png" alt="">
         </div>
         <div class="ca-breadcrumb-shape p-absolute bre-sh-2">
            <img src="assets/img/shape/ca-line-shape.png" alt="">
         </div>
         <div class="container">
            <div class="ca-breadcrumb-content text-center">
               <h2 class="ca-breadcrumb-title fnw-600">Expert Project Cargo Handling</h2>
               <div class="it-breadcum-link">
                  <a href="index.php">Home</a>
                  <span><i class="fa-solid fa-angle-right"></i></span>
                  <a href="service.php">Service</a>
                  <span><i class="fa-solid fa-angle-right"></i></span>
                  <a class="active" href="#">Expert Project Cargo Handling</a>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- service left -->
      <div class="ca-service-lft-area pt-100 pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 mb-30">
                  <!-- sidebar area -->
                  <div class="ca-sidebar-area mr-50">
                     <!-- sidebar contact -->
                     <div class="ca-search ca-padding cream-bg-3 br-7 mb-30">
                        <h4 class="ca-title fnw-600 theme-black-3 pb-24">Get A Free Quote</h4>
                        <div class="ca-sidebar-form">
                           <form id="serviceForm" method="POST" action="">
                              <input type="text" placeholder="Your Name" id="name" name="name" required>
                              <input type="email" placeholder="Email Address" id="email" name="email" required>
                              <input type="tel" placeholder="Phone Number" id="tel" name="tel" required>
                              <textarea placeholder="Your Message" id="message" name="message" rows="5" required></textarea>

                              <div class="ca-sidebar-form-btn text-end">
                                 <button type="submit" class="ca-btn-primary-3 theme-bg-3 text-white br-50">
                                    Contact Now <span><i class="fa-solid fa-angle-right"></i></span>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- phone us -->
                     <div class="ca-servic-list ca-padding cream-bg-3 br-7 mb-30">
                        <h4 class="ca-title ca-servic-list-title fnw-600 theme-black-3 pb-24">If You Need Any Help <br> Contact With Us</h4>
                        <div class="ca-ph-content">
                           <div class="ca-ph-ic">
                              <span><img src="assets/img/icon/ca-ser-phone.svg" alt=""></span>
                           </div>
                           <div class="ca-ph-title">
                              <h4 class="ph-title"><a href="tel:+91444266548"> +91-44-4266548</a></h4>
                           </div>
                        </div>
                     </div>
                     <!-- Follow Us -->
                     <div class="ca-search ca-padding cream-bg-3 br-7 mb-30">
                        <h4 class="ca-title fnw-600 theme-black-3 pb-24">Follow Us</h4>
                        <div class="ca-footer-social ca-footer-social-3">
                           <ul>
                              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 mb-30">
                  <div class="ca-service-content-area">
                     <div class="ca-servic-thumb br-7 mb-40">
                        <img class="w-100" src="assets/contiship-logistics/service/single-service05/service.webp" alt="">
                     </div>
                     <div class="ca-servic-thumb-content">
                        <h2 class="ca-service-thumb-title theme-black-3 fnw-600 ca-text-cap">Expert Project Cargo Handling</h2>
                        
                        <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>
                              <p>Specialized Equipment and Expertise: From heavy machinery to oversized equipment, our specialized handling capabilities ensure safe and efficient transportation of your project cargo.</p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>
                              <p>Customized Logistics Solutions: We understand that every project is unique. Our dedicated team develops tailored logistics solutions to meet your specifi c project requirements, delivering peace of mind and exceptional service every step of the way.</p>
                        </div>

                        <h3 class="ca-thumb-title-2 theme-black-3 fnw-600 pt-40 ca-text-cap">Frequently Asked Question</h3><br><br>
                        <div class="ca-acordion-area">
                           <div class="accordion" id="accordionExample">
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       How can logistics problems be reduced?
                                    </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="ca-accordion-body">
                                        <p>Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       What is the best way to manage logistics?
                                    </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                     <div class="ca-accordion-body">
                                        <p>Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       How many types of logistics are there?
                                    </button>
                                 </h2>
                                 <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                     <div class="ca-accordion-body">
                                        <p>Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How many types of logistics problems?
                                    </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="ca-accordion-body">
                                        <p>Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </main>

   <button id="topBtn3"><i class="fa-solid fa-arrow-up"></i></button>

   <?php include('partials/footer.php'); ?>
   <?php include('partials/footer-scripts.php'); ?>

</body>

</html>