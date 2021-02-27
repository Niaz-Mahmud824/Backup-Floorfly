@extends('admin.admin_app')

@section('content')
    @include('admin.includes.errors')
<div id="main">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Create new post</h2>
        </div>
        <div class="card-body">
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Post Title</label>
                            <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Post Title">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Image</label> <br>
                            <div class="form-group user_prfile">
                                <input type="file" class="form-control" name="feature">
                                
                            </div>
                        </div>
                    </div>

                </div> <!--row-->

                <div class="form-group">
                    <label for="formGroupExampleInput">Select a Category</label>

                    <select class="form-control" id="category_id" name="blogcategory_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

              
                <div class="form-group">
                    <label for="formGroupExampleInput2">Description </label>
                    <textarea type="text" name="description" id="p-desc" class="form-control" placeholder="service description" row="10"></textarea>
                 
                     <!--<textarea class="summernote form-control" placeholder="type description" name="description"></textarea>-->
                </div>


                <div class="form-group">
                    <div class="google-ads" style="width: 100%; max-height: 100px;">

                    </div>
                    <div class="submit-btn">
                        <input type="submit"  class="btn btn-success" value="Click To Submit" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                </div>

            </form>
        </div>
    </div>
 </div>
 
 
<script type="text/javascript" src="{{ URL::asset('site_assets/ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace( 'p-desc' );</script>

@stop


