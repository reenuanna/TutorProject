
@extends('user.homeheader')
@section('body')
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <section class="layout_padding section">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                         
                        </div>
                      </div>
                      <div class="row">
                      	@foreach($result as $val)
                        <div class="col-md-4 text_align_center">
                 <div class="cours">
                   
                   <img src="{{asset('/images/cour3.png')}}" alt="#"  height="90"/>
                 </div>
                 <h3>{{$val->name}}</h3>
                 <p>Mobile : {{$val->mobile}}<br>
                 	Qualification : {{$val->quali}}<br>
                 	Subject : {{$val->sub_name}}</p>
              </div> 
                        @endforeach
                      </div>
                    </div>
                  </section>
              </div>
            </div>
          </div>
  </section>
@endsection

