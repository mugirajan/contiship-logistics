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
               <h2 class="ca-breadcrumb-title fnw-600">Efficient Freight Transportation</h2>
               <div class="it-breadcum-link">
                  <a href="index.php">Home</a>
                  <span><i class="fa-solid fa-angle-right"></i></span>
                  <a href="service.php">Service</a>
                  <span><i class="fa-solid fa-angle-right"></i></span>
                  <a class="active" href="#">Efficient Freight Transportation</a>
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
                        <img class="w-100" src="assets/contiship-logistics/service/single-service01/service-one.png" alt="">
                     </div>
                     <div class="ca-servic-thumb-content">
                        <h2 class="ca-service-thumb-title theme-black-3 fnw-600 ca-text-cap">Efficient Freight Transportation</h2>
                        
                        <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>  
                              <p>Air Freight: When time is of the essence, our air freight services ensure swift and reliable delivery of your goods to any destination worldwide.</p>
                        </div>
                         <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div>
                              <p>Sea Freight: For cost-effective solutions without compromising on reliability, trust our expertise in managing sea freight shipments across oceans and continents.</p>  
                        </div>
                         <div class="d-flex justify-content-center align-items-center pt-16">
                              <div class="ca-ab-sngle-item-ic">
                                 <span><i class="fa-solid fa-check"></i></span>
                              </div> 
                              <p>Road Freight: Our extensive network of carriers ensures seamless transportation of your goods via road, with flexible scheduling and nationwide coverage.</p> 
                        </div>

                        <p class="pt-16">
                           Our company is an expert in Sea and Air freight forwarding. We have 18 years of rich experience in freight forwarding industry that makes us a leading service provider to serve our customers for their specific requirements. Our counterparts are spread all over India that ensures your supply chain being handled properly at any corner of the country by experienced personnel.
                        </p>
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
                                       <p>To reduce logistics problems, businesses should implement advanced technology like automation, GPS tracking, and AI for efficiency, and improve communication with integrated systems and clear protocols. Optimizing inventory management through JIT and accurate demand forecasting, and enhancing transportation efficiency with route optimization and multi-modal transport are crucial. Strengthening supplier relationships, focusing on customer service, investing in regular training, adopting sustainable practices, and implementing robust risk management are also key. Leveraging data analytics to monitor performance and applying lean principles with continuous improvement feedback loops can further streamline logistics processes.</p>
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
                                       <p>The best way to manage logistics involves leveraging advanced technology such as automation and real-time tracking systems, alongside strategic planning for efficient inventory and transportation management. Strengthening supplier relationships and ensuring clear communication across the supply chain are crucial. Additionally, focusing on customer service, investing in continuous employee training, and adopting sustainable practices enhance efficiency. Robust risk management and data-driven decision-making through performance monitoring and predictive analytics further streamline logistics operations, ensuring a responsive and resilient supply chain.</p>
                                    </div>
                                 </div>
                              </div>
                              <!-- single accordion item -->
                              <div class="ca-accordion-item ca-accordion-item-2 mb-24">
                                 <h2 class="ca-accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       How many types of logistics are there?
                                    </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="ca-accordion-body">
                                       <p>Logistics can be categorized into several types: inbound logistics for raw materials to manufacturing, outbound logistics for finished products to customers, and reverse logistics for returns and recycling. Third-party logistics (3PL) uses external companies for logistics functions, while fourth-party logistics (4PL) oversees the entire supply chain. Distribution logistics manages storage and transportation to retailers or customers, and green logistics focuses on sustainability. Global logistics handles international shipping, event logistics manages materials for events, and e-commerce logistics specializes in online retail fulfillment and last-mile delivery.</p>
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