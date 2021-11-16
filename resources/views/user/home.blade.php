@extends('user.header')
@section('body')
<section class="main_full banner_section_top">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
                  <div class="slider_banner">
                    <img class="img-responsive" src="images/online-classes.jpg" alt="#" />
                      <div class="slide_cont divfirm">
                        <form action="/selectClassSub" method="post" class="frmcls">
                        @csrf
                           <div class="container">
                              
                           <div class="row">
                              <div class="col-sm-4">
                                 
                                 <!-- <input type="text" class="form-control form-control-lg"> -->
                              <select name="cls" id="cls"class="form-control form-control-lg">
                                 <option value="default" selected="selected" disabled="disabled">Select Your Class</option>
                                @foreach($result as $data)
                                <option value="{{$data->cls_id}}">{{$data->class}} </option>
                              @endforeach
                              </select>
                              </div>
                            
                              <div class="col-sm-4">
                             
                                 <!-- <input type="text" class="form-control form-control-lg"> -->
                                 <select name="sub" id="subject"class="form-control form-control-lg">
                                 <option value="default" selected="selected" disabled="disabled">Select Your Subject</option>
                              </select>
                              </div>
                              <script>
                                 $(document).ready(function()
                                 {
                                    $('#cls').change(function(){
                                      var id=$('#cls').val();
                                    //   alert(id)
                                      $.ajax({
                                       type:'get',
                                       url:'/clsSubj/'+id,
                                       success:function(result)
				                           {
                                       //alert(result);
                                          $('#subject').html(result);
                                       }
                                      });
                                    });
                                 });
                              </script>
                              <div class="col-sm-4">
                               
                                 <input type="submit" class="btn btn-primary btn-block btn-lg">
                              </div>
                           </div>
                           </div>
                              </form>
                        </div>
                      </div>
                  </div>
                </div>
          </div>
        </div>
      </section>
@endsection