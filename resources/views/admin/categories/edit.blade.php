@extends('admin.layout.layout')
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Category</h2>
                    <h5>Welcome {{ Auth::user()->name }} , Love to see you back. </h5>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form role="form" action="{{ route('categories.update',$category->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name"  value="{{$category->name}}"/>
                                            @if ($errors->has('name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label>Image</label>
                                            <img src="{{asset('web/images/'.$category->image)}}" alt="" width="150">
                                            <input type="file" name="image" />
                                            @if ($errors->has('image'))
                                                <div class="text-danger">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-info pull-right">Update Category</button>
                                    </form>
                                    <!-- /. ROW  -->
                                </div>
                                <!-- /. PAGE INNER  -->
                            </div>
                        @endsection
