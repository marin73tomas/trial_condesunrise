<div id="carouselHome" class="carousel slide  w-100" data-bs-ride="carousel">
     <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner h-100">

          <?php for ($i = 0; $i < 3; $i++) { ?>
               <div class="carousel-item h-100 <?php if ($i == 0) echo 'active'; ?>">
                    <div class="container h-100 mx-auto">
                         <div class="row h-100 justify-content-around">
                              <div class="col-12 col-md-7">
                                   <h2 class='main-gray-color fw-bold'>ENGAGED <span class='main-red-color'> EMPLOYEES. </span><br>
                                        SEAMLESS <span class='main-red-color'> EXPERIENCE. </span> <br>
                                        SECURE <span class='main-red-color'> TECHNOLOGY. </span> <br> </h2>
                                   <h3 class='main-gray-color2 mt-3 f-semibold'>Trusted Managed IT Company</h3>
                              </div>
                              <div class="col-12 col-md-5 d-flex flex-column align-items-center mt-1">
                                   <img class="d-block mx-auto" id="play-button" src="/wp-content/uploads/2021/07/Grupa-16@2x.png" alt="play-button">
                                   <p id="play-video-txt" class="mt-2 text-center text-white fw-bold">PLAY THE VIDEO</p>
                              </div>
                         </div>

                    </div>
               </div>


          <?php } ?>
     </div>

     <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">

     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">

     </button>
</div>