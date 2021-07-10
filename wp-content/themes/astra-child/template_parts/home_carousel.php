<div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner position-relative">

          <?php for ($i = 0; $i < 3; $i++) { ?>
               <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">

                    <div class="row justify-content-around">
                         <div class="col-6 col-sm-12">
                              <h2>ENGAGED <span class='main-red-color'> EMPLOYEES. </span>
                                   SEAMLESS <span class='main-red-color'> EXPERIENCE. </span>
                                   SECURE <span class='main-red-color'> TECHNOLOGY. </span> </h2>
                              <h3 class='main-gray-color2'>Trusted Managed IT Company</h3>
                         </div>
                         <div class="col-6 col-sm-12 d-flex flex-column align-items-center">
                              <img src="/wp-content/uploads/2021/07/Grupa-16@2x.png" alt="play-button">
                         </div>
                    </div>

               </div>


          <?php } ?>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
     </button>
</div>