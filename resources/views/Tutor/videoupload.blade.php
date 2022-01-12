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
                      <div class="col-lg-6" >
                        <table class="table table-striped">
                          <tr>
                            <th>Class</th>
                            <th>Subject</th>
                            <th>Topic</th>
                            <th>Video</th>
                          </tr>
                          @foreach($video as $v_val)
                          <tr>
                            <td>{{$v_val->}}</td>
                          </tr>
                          @endforeach
                        </table>
                    </div>
                       <div class="col-sm-6">
                        <div class="upload-video">
                        @foreach($result as $val)
                        @php 
                $values=explode(',',$val->classes);
                $subs=explode(',',$val->subjects)
                @endphp
             
             
              </td>
         
                            <form action="/uploadvideo" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="video-name">Class</label>
                                      <select name="cls" id="cls" class="form-control">
                                        <option value="default">Select Class</option>
                                      @foreach($cls as $cls_val)
                                      @if(in_array("$cls_val->cls_id", $values))
                                        <option value="{{$cls_val->cls_id}}"> {{$cls_val->class}}</option>
                                        @endif
                                        @endforeach

                                      </select>
                                </div>
                               
                                <div class="form-group">
                                    <label for="video-name">Subject</label>
                                    <select name="sub" id="sub" class="form-control">
                                    <option value="default">Select Subject </option>
                                      @foreach($sub as $sub_val)
                                      @if(in_array("$sub_val->sub_id", $subs))
                                        <option value="{{$sub_val->sub_id}}"> {{$sub_val->sub_name}}</option>
                                        @endif
                                        @endforeach

                                      </select>
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
                                  <!-- <a href="{{asset('images/Sincy Sebastian.pdf')}}">download</a> -->
                                </div>
                            </form>
                            @endforeach
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