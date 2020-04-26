@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Form Basic</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <form class="form-horizontal" action="{{url("admin/category/update_category",['id'=>$category->id])}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cc-name" class="col-sm-3 text-right control-label col-form-label">Category Name Edit</label>
                                    <div class="col-sm-9">
                                        <input name="category_name" placeholder="Category Name Here" id="cc-name" value="{{$category->category_name}}"
                                               class="form-control @if($errors->has("category_name"))is-invalid @else is-valid @endif" type="text">
                                    </div>
                                </div>
                                @if($errors->has("brand_name"))
                                    <div class="invalid-feedback">
                                        {{$errors->first("brand_name")}}
                                    </div>
                                @endif
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
