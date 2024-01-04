@extends('admin.layout.layout')
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Product</h2>
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

                                    <form role="form" action="{{ route('products.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <label >Category Name</label>

                                            <select name="category_id"  class="form-control">
                                                <option value="">Please Select</option>
                                                @foreach ($categories as $category )
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <div class="text-danger">
                                                    {{ $errors->first('category_id') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" />
                                            @if ($errors->has('name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>salary</label>
                                            <input class="form-control" type="text" name="salary" />
                                            @if ($errors->has('salary'))
                                                <div class="text-danger">
                                                    {{ $errors->first('salary') }}
                                                </div>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" />
                                            @if ($errors->has('image'))
                                                <div class="text-danger">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-info pull-right">Save Product</button>
                                    </form>
                                    <!-- /. ROW  -->
                                </div>
                                <!-- /. PAGE INNER  -->
                            </div>
                        @endsection
