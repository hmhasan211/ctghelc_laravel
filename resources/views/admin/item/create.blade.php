@extends('layouts.app')
@section('title','Category create')

@push('css')

@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <!-- show error messages -->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span><strong> Sorry!!</strong> {{$error}}</span>
                            </div>
                        @endforeach
                    @endif
                      <!-- End error messages -->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add New Category</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-8 offset-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Category Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    <a class="btn btn-danger" href="{{route('category.index')}}">Back</a>
                                    <button type="submit" class="btn btn-primary ">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            @endsection
            @push('script')

          @endpush

