@extends('admin.header')
@section('body')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/insertSubject">
              @csrf
                <div class="card-body">
                <div class="form-group">
                    <label> Classes</label>
                    <select name="cls" id="cls" class="form-control">
                        <option value="default" selected="selected" disabled="disabled">---Select Class---</option>
                        @foreach($result as $value)
                        <option value="{{$value->cls_id}}">{{$value->class}}</option>
                        @endforeach
                    </select>                  
                </div>
                  <div class="form-group">
                    <label> Subjects</label>
                    <input type="text" class="form-control" name="subj">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection