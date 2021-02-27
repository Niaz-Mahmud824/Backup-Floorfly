
<style>
.cat-head
{
font-family: 'Open Sans', sans-serif;
  font-style: normal;
      font-weight: 400;

}

</style>
@extends("app")

@section('head_title', stripslashes($blog->title) .' | '.getcong('site_name') )
@section('head_description', substr(strip_tags($blog->description),0,200))
@section('head_image', asset($blog->feature))
@section('head_url', Request::url())

@section("content")
    <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" >
        <div class="inner-container container">
          
        </div>
    </section>
    <!--Breadcrumb Section-->


    
 <section class="main-container container">
  	<aside class="col-sm-4">
      <div class="sidebar-box sidebar-blog-cat">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
		<h4 class="cat-head">All Categories</h4><br>
		<ul class="blog-sidebar-menu">
		    {{--@php $all_cats= \App\Blogcategory::all(); @endphp--}}
		    @foreach($categories as $result)
		   <li class=" ">
		        <a href="{{route('blog-category.single',['slug'=>$result->slug])}}" class="list-group-item list-group-item-action list-group-item-success" style="color:black;">{{$result->name}} <span  style="float:right; ">{{$result->blogs->count()}}</span>   </a>

		    </li>
		     @endforeach

		</ul>
		</div>
    </aside>
    <div class="col-sm-8">
        <div class="content-box">
  		 <div class="single-blog-posts-body">
            <div class="blog-thumbs">
				<br>
             <img src="{{asset($blog->feature)}}" alt="{{$blog->title}}" class="img-thumbnail">    
            </div>
			<br>
            <div class="blog-contents">
				<h1 class="blog-title" style="text-align:left;">{{$blog->title}}</h1>
               <!-- <ul class="post-info-header list-inline">
                  
                  <li>Posted on:  <b>{{$blog->created_at->format('d-m-y')}}</b></li>
                </ul>-->
				
				<br>
				<div class="author-box">
					<div class="row">
						<div class="col-md-3">
						<div class="author-img text-center">
								 <img src="{{ URL::asset('site_assets/img/kazi-manzur.jpg') }}" class="rounded-circle" alt="author image" style=" height: 120px; ">
							</div>
						</div>
<br>
						<div class="col-md-9">
							<div class="author-info" style="margin-top:50px;">
								<small><em>Written by,</em></small>

								<p><strong>Kazi Manzur Ahmed,</strong><br><small>CEO, Floorfly Realtor Ltd.</small></p>

			
							
							</div>
						</div>
					</div>
					
				</div>
                <span class="blog-description">
                    {!! $blog->description!!}
                </span>
            </div>
           
            <div class="related-post mt-3">
                <div class="heading">
                    <h4 class="heading-title">Related Jobs</h4>
                </div>
                <div class="row">
                    @foreach($related->where('status',1)->take(4) as $row)
                    <div class="col-md-3">
                        <div class="card relatedpost">
                         <a href="{{route('blog.single',['slug'=> $row->slug]) }}">        
                          <img src="{{asset($row->feature)}}" class="card-img-top img-thumbnail" alt="{{$row->title}}">
                          <div class="card-body">
                            <h4 class="card-title" style="color: #000;font-weight: bold;">{{$row->title}}</h4>
                          </div>
                          </a>
                        </div>
                    </div>
                    @endforeach
                </div>

             </div> <!-- related-post-->
             
              
        </div>
   
    </div>
    </div>
  
  </section>

 
 
@endsection
