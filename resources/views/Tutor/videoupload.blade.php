@extends('Tutor.homeheader')
@section('body')
 <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <section class="layout_padding section">
                    <div class="container">
                      <div class="row">
                     
                        <div class="col-lg-12">
                          @foreach($result as $val)
                          {{$val->name}}
                          @endforeach
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-lg-6 videoup-1" >
                    </div>
                       <div class="col-sm-6">
                        <div class="upload-video">
                            <form action="/uploadvideo" method="post">
                                <div class="form-group">
                                    <label for="video-name">Class</label>
                                    <input type="text" name="name" id="name" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="video-name">Subject</label>
                                    <input type="text" name="name" id="name" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="video-name">Topic</label>
                                    <input type="text" name="name" id="name" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="video-play">Upload Video</label>
                                    <input type="file" name="video" id="video" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Upload" class="btn btn-primary" name="upload" id="upload">
                                  <a href="{{asset('images/Sincy Sebastian.pdf')}}">download</a>
                                </div>
                            </form>

                        </div>
                       </div>
                        
                         
                      </div>
                    </div>
                  </section>
              </div>
            </div>
          </div>
  </section>
   
@endsection