  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>TechWorx<br>
            </h1>
            <h2> for Industrial Services</h2>
          
          <h2>Integrity casts quality 
            Innovation leads the 
            future</h2>
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://www.youtube.com/watch?v=---" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <!-- image-sliders -->
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <!-- <img src="assets/img/logo2.png" class="img-fluid animated" alt=""> -->
        
         <!---------slider------------->
 <div class="wrapperindex container">
  <div class="owl-nav">
  <div class="NextArrow bx bx-chevron-right"></div>
  <div class="PrevArrow bx bx-chevron-left"></div>
  </div>
  <div class="carouselindex  owl-carousel  owl-theme">  
    <div class="cardindex" >
        <div class="row  m-0 p-0 "> 
        <div class="col-md-12 col-sm-12 p-0">
        
        <img width="100%" src="assets/img/slider/logo2.png" >
                    </div>
      
            </div>
      </div>
    <!--  -->
    <?php
$dir="assets/img/slider/*";
$images=glob($dir);
foreach($images as $image)
{
    ?>
<div class="cardindex" >
    <div class="row  m-0 p-0 "> 
    <div class="col-md-12 col-sm-12 p-0">
    
    <img width="100%" src="<?php echo $image;  ?>" >
                </div>
  
        </div>
  </div>
    <?php
}
    ?>
 </div>
      </div>
      </div>
   <!--------end slider--------------->
        <!-- end image-slider -->
      </div>
    </div>

  </section><!-- End Hero -->