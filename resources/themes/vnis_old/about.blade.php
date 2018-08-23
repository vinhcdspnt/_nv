@extends('theme::master')
@section('page_title', setting('site.title'))
@section('header')
	@include('theme::partials.header')
@endsection
@section('content')
    <div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">{{setting('about.title')}}</h1>
								<p class="text-white link-nav"><a href="/">Trang chủ </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Giới thiệu </a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								<div class="content-wrap">
									<ul class="tags">
										<li><a href="/{{$post1->category->slug}}">Giới thiệu</a></li>
									</ul>
									<a href="/gioi-thieu/{{$post1->slug}}">
										<h3>{{ $post1->title }}</h3>
									</a>
									<ul class="meta pb-20">
										<li><span class="lnr lnr-user"></span>{{$post1->author->name}}</li>
										<li><span class="lnr lnr-calendar-full"></span>{{$post1->created_at->format('d-m-Y')}}</li>
									</ul>

									{!! $post1->body !!}									

								</div>
								<div class="navigation-wrap justify-content-between d-flex">
									<a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Trước</a>
									<a class="next" href="#">Sau<span class="lnr lnr-arrow-right"></span></a>
								</div>

							</div>

						<!-- End single-post Area -->
					</div>
                    <div class="col-lg-4">
                            <div class="sidebars-area">
					
								<div class="single-sidebar-widget editors-pick-widget">
										<h6 class="title">Các tin khác</h6>
										<div class="editors-pick-post">
											<div class="post-lists">
												@foreach($posts as $post)	
													<div class="single-post d-flex flex-row">
														<div class="thumb">
															<img src="@if(!isset($post->image)){{ setting('site.pathImageDefault') }}@else{{ Voyager::image( $post->image ) }}@endif" width="100px" height="80px" alt="">
														</div>
														<div class="detail">
															<a href="/gioi-thieu/{{$post->slug}}"><h6> {{$post->title}} </h6></a>
															<ul class="meta">
																<li><span class="lnr lnr-calendar-full"></span>{{$post->created_at->format('d-m-Y')}}</li>
									
															</ul>
														</div>
													</div>
												@endforeach													
											</div>
									</div>
                            </div>
                        </div>
				    </div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>    
@endsection
@section('footer')
	@include('theme::partials.footer')
@endsection