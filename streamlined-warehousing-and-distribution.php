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
               <h2 class="ca-breadcrumb-title fnw-600">Streamlined Warehousing and Distribution</h2>
               <div class="it-breadcum-link">
                  <a href="index.php">Home</a>
                  <span><i class="fa-solid fa-angle-right"></i></span>
                  <a href="service.php">Service</a>
                  <span><i class="fa-solid fa-angle-right"></i></span>
                  <a class="active" href="#">Streamlined Warehousing and Distribution</a>
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
                           <div id="toast-container"></div>
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
                        <img class="w-100" src="assets/contiship-logistics/service/single-service03/service-one.jpg" alt="">
                     </div>
                     <div class="ca-servic-thumb-content">
                        <h2 class="ca-service-thumb-title theme-black-3 fnw-600 ca-text-cap">Streamlined Warehousing and Distribution</h2>
                        
                        <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>
                              <p>Secure Storage Facilities: Trust our state-of-the-art warehouses to keep your goods safe and secure, with advanced security measures .</p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>
                              <p>Efficient Inventory Management: Our cutting-edge inventory management systems ensure real-time visibility of your stock levels, optimizing inventory turnover and reducing holding costs.</p>
                        </div>
                        <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div> 
                              <p>Prompt Order Fulfi llment: From order processing to shipping, our streamlined fulfi llment process ensures your customers receive their orders promptly and accurately.</p>
                        </div>
                         <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>
                              <p>Quick Distribution: CLPL handles huge volumes of cargo everyday, runs a fl eet of trucks and tackles the entire string of logistics for its clients.</p> 
                        </div>

                        <h3 class="ca-thumb-title-2 theme-black-3 fnw-600 pt-40 ca-text-cap">Frequently Asked Question</h3><br><br>
                        <div class="ca-acordion-area">
                           <div class="accordion" id="accordionExample">
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       What is a 3PL warehouse?
                                    </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="ca-accordion-body">
                                        <p>A 3PL warehouse is a link in the supply chain that allows customers to utilize the receiving, storage, and distribution services of the 3PL so that they can have the flexibility to expand and contract as their business changes and not have to incur the costs associated with having to rent, maintain and operate their own warehouse. The 3PL warehouse allows the customer to focus on growing and expanding their core business and not the day to day handling of the product.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       How does a 3PL work?
                                    </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                     <div class="ca-accordion-body">
                                        <p>A 3PL works by providing outsourced logistics services pertaining to the movement and management of customer goods from third parties. This can encompasses anything that involves management of one or more facets of procurement, fulfillment, Value Add Services (VAS) and shipping/receiving activities that involves storing or shipping items.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       How many types of Warehouses are there?
                                    </button>
                                 </h2>
                                 <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                     <div class="ca-accordion-body">
                                        <p>General warehouse<br>
                                           A conventional storage facility that offers storage and various services to multiple customers on a rental basis. General warehouses may be more cost-effective for businesses that don't need duty deferral or customs supervision. </p>
                                        <p>Customs bonded warehouse<br>
                                           A secure storage facility that allows businesses to store imported goods without immediate payment of customs duties. Customs bonded warehouses are subject to customs supervision and management, and goods are not allowed to enter or leave the warehouse without customs approval. </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       What is the most important document when storing cargo at a Warehouse? 
                                    </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="ca-accordion-body">
                                        <p>An Insurance policy is absolutely required when storing cargo at a warehouse. It will be very helpful in case of an unfortunate incident</p>
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