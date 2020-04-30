@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ADD new post</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal" action="{{url("admin/post/store_post")}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="card-body col-8">
                                    <div class="form-group row">
                                        <label class="col-sm-2">Title</label>
                                        <div class="col-sm-10">
                                            <input name="post_title" placeholder="post title Here" id="post-title" value="{{old("post_title")}}" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2">Content</label>
                                        <div class="col-sm-10">
                                            <textarea name="post_content" placeholder="post content Here" id="post_content"></textarea>

                                            <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
                                            <script type="text/javascript">
                                                tinymce.init({
                                                    selector: '#post_content',
                                                    height: 300,
                                                    theme: 'modern',
                                                    plugins: [
                                                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                                        'searchreplace wordcount visualblocks visualchars code fullscreen',
                                                        'insertdatetime media nonbreaking save table contextmenu directionality',
                                                        'emoticons template paste textcolor colorpicker textpattern imagetools'
                                                    ],
                                                    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                                                    toolbar2: 'print preview media | forecolor backcolor emoticons',
                                                    image_advtab: true
                                                });
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2">Short Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="post_desc" placeholder="post Short Description Here" id="post-desc" class="form-control" type="text"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body col-4">

                                    <div class="form-group row">
                                        <label class="col-3">Category</label>
                                        <div class="col-9">
                                            <select name="post_category" class="select2 form-control custom-select" required>
                                                <option value="" disabled selected>Select</option>
                                                <optgroup label="Category">
                                                    @foreach($categories as $c)
                                                        <option value="{{$c ->id}}">{{$c -> category_name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">User</label>
                                        <div class="col-9">
                                            <select name="post_user" class="select2 form-control custom-select" required>
                                                <option value="" disabled selected>Select</option>
                                                <optgroup label="User">
                                                    @foreach($users as $u)
                                                        <option value="{{$u ->id}}">{{$u ->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-3">Author</label>
                                        <div class="col-9">
                                            <input name="post_author" placeholder="post author Here" id="post-author" value="{{old("post_author")}}" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3">Thumbnail</label>
                                        <div class="col-9">
                                            <input name="post_thumbnail" placeholder="post thumbnail Here" id="post-thumbnail" value="{{old("post_thumbnail")}}" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>


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
