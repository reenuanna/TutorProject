@extends('user.header')
@section('body')
      
      <!-- section -->
      <section class="main_full banner_section_top">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
                  <div class="slider_banner">
                    <img class="img-responsive" src="images/slider_img.png" alt="#" />
                      <div class="slide_cont">
                        <div class="slider_cont_inner">
                          <h3>Welcome </h3>
                        <p>Believe in yourself, and the rest will fall into place. Have faith in your own abilities, work hard, and there is nothing you cannot accomplish.<br>--<b>Brad Henry</b>--</p>
                        <!-- <a class="blue_bt" href="#">Read More</a> -->
                        </div>
                      </div>
                  </div>
                </div>
          </div>
        </div>
      </section>
      <!-- end section -->
    
     <!-- about section -->
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>About</h2>
                  </div>
                  <div class="full">
                     <p class="large">An academic support,provided by an expert teacher; someone with deep knowledge or defined expertise in a particular subject or set of subjects</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                     <img src="/images/ab_img.png" alt="#" />
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
                   <img class="img-responsive" src="/images/cour1.png" alt="#" />
                 </div>
                 <h3>English</h3>
                 <p></p>
              </div>  

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                   <img class="img-responsive" src="/images/cour2.png" alt="#" />
                 </div>
                 <h3>Maths</h3>
                 <p></p>
              </div> 

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                   <img class="img-responsive" src="/images/cour3.jpg" alt="#" />
                 </div>
                 <h3>Chemistry</h3>
                 <p></p>
              </div> 

            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full center">
                      <a class="blue_bt" href="">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

      <!-- section -->
      <section class="layout_padding section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>Our Coaching Time</h2>
                  </div>
               </div>
            </div>
            <div class="row">
              <div class="col-md-12 cours_timging_img">
                 <div class="container">
                    <div class="time_table timecss">
                          <ul><li>Monday</li><li>8 Am - 6 Pm</li></ul>
                          <ul><li>Tuesday</li><li>9 Am - 5 Pm</li></ul>
                          <ul><li>Wednesday</li><li>10 Am - 8 Pm</li></ul>
                          <ul><li>Thursday</li><li>8  Am - 6 Pm</li></ul>
                          <ul><li>Friday</li><li>6 Am - 4 Pm</li></ul>
                          <ul><li>Saturday</li><li>9 Am - 5 Pm</li></ul>
                          <ul><li>Sunday</li><li>Holiday</li></ul>
                       </div>
                 </div>        
              </div> 
            </div>
         </div>
      </section>
      <!-- end section -->

      <!-- section -->
      <section class="layout_padding section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2>Our Success Stories</h2>
                  </div>
                  <div class="full">
                     <p class="large">In ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>consequat. Duis aute irure dolor in re</p>
                  </div>
               </div>
               <div class="col-md-12 testimonial">
                  <div class="full text_align_center">
                     <img src="/images/testimon.png" alt="#" />
                     <h3><span class="theme_color_text">koluda</span><br><small>Student</small></h3>
                  </div>
                  <div class="full margin_top_30 text_align_center">
                    <h4>I have successfully complated</h4>
                    <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<br>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
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