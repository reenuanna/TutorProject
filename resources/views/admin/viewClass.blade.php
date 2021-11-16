@extends('admin.header')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Classes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>                  
                                <tr class="bg-info">
                                    <th class="text-center">Classes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($result as $value)
                                <tr>
                                    <td  class="text-center">{{$value->class}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <a href="/addcls" class="btn btn-primary">+Add</a>
                    </div>
                </div>
            <div>
        </div>
    </section>
</div>
@endsection