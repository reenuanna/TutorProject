@extends('user.homeheader')
@section('body')
      <!-- end header -->
      
      
      
    
     <!-- about section -->
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full">
                     <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                     <img src="images/ab_img.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end about section -->

      <!-- section -->
      <section class="layout_padding section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>Our Courses</h2>
                  </div>
                  <div class="full">
                     <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                  </div>
               </div>
            </div>
            <div class="row">

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                   <img class="img-responsive" src="images/cour1.png" alt="#" />
                 </div>
                 <h3>Design</h3>
                 <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
              </div>  

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                   <img class="img-responsive" src="images/cour2.png" alt="#" />
                 </div>
                 <h3>Coding</h3>
                 <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
              </div> 

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                   <img class="img-responsive" src="images/cour3.png" alt="#" />
                 </div>
                 <h3>Javascript</h3>
                 <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
              </div> 

            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full center">
                      <a class="blue_bt" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
  
      <!-- section -->
      <section class="section blue_pattern_bg" style="background-color: #3b3bff;">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <h4>Subscribe Now to Our Newsletter !</h4>
                     <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br>labore et dolore magna aliqua.</p>
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form_subribe">
                    <form>
                       <input type="email" name="email" placeholder="Enter Your Email" />
                       <button>Subscribe</button>
                    </form>
                 </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
@endsection
