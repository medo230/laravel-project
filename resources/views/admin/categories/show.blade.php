@extends('admin.layout.layout')
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Categories</h2>
                    <h5>Welcome {{ Auth::user()->name }} , Love to see you back. </h5>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <div class="row">

                <div class="col-md-12">
                    <!--    Context Classes  -->
                    <div class="panel panel-default">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Date Added</th>
                                            <th>Actions</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <th>#</th>
                                                <th><img src="{{ asset('web/images/' . $category->image) }}" width="150"
                                                        height="150"></th>
                                                <th>{{ $category->name }}</th>
                                                <th>{{ $category->created_at }}</th>
                                                <th>
                                                    <a href="{{ route('categories.show', $category->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{ route('categories.destroy', $category->id) }}"
                                                        class="btn btn-danger square-btn-adjust"
                                                        onclick="event.preventDefault();
 document.getElementById('delete-form-{{ $category->id }}').submit();">Delete</a>
                            </div>
                            </nav>
                            <form id="delete-form-{{ $category->id }}"
                                action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                            </th>
                            </tr>
                            @endforeach



                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  end  Context Classes  -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
@endsection
