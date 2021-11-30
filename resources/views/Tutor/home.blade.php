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
                        <div class="col-lg-4 col-6">
            <!-- small box -->
                          <div class="msg-box">
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <!-- <a href="#" class="msg-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                          </div>
                          <p><a href="/notifi">New Notifications</a></p>
                        </div>
                        <div class="col-lg-4 col-6">
            <!-- small box -->
                          <div class="msg-box1">
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <!-- <a href="#" class="msg-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                          </div>
                          <p><a href="/videoup">Upload Video</a></p>
                        </div>
                         <div class="col-lg-4 col-6">
            <!-- small box -->
                          <div class="msg-box2">
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <!-- <a href="#" class="msg-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                          </div>
                          <p><a href="/noteup"> Upload Notes</a></p>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
            </div>
          </div>
  </section>
   
@endsection