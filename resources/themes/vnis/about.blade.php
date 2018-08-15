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
										<li><a href="#">Giới thiệu</a></li>
									</ul>
									<a href="#">
										<h3>{{ $post1->title }}</h3>
									</a>
									<ul class="meta pb-20">
										<li><a href="#"><span class="lnr lnr-user"></span>Administrator</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>

									</ul>

									{!! $post1->body !!}									
									{{--  <p style="color:#222222">
										Thành lập năm 2013, Công ty Cổ phần Công nghệ An toàn thông tin và Truyền Thông Việt Nam (VNIST., JSC) không ngừng phát triển lớn mạnh về quy mô và nhân sự, thực hiện mục tiêu trở thành tập đoàn công nghệ và an toàn thông tin hàng đầu tại Việt Nam. Lấy thế mạnh Công nghệ thông tin và An toàn thông  tin, VNIST đã và đang dần khẳng định vị thế của mình  trên cả bình diện trong nước và quốc tế.
									</p>
									<p style="color:#222222">
										VNIST sở hữu những người trẻ, những chuyên gia có trình độ cao, kinh nghiệm và đam mê trong công việc. Với sứ mệnh tạo nên những sản phẩm, dịch vụ mang thương hiệu Việt Nam và do người Việt Nam làm chủ, chúng tôi luôn nỗ lực và chiến đấu mỗi ngày.
									</p>
									<p><h3>NHIỆM VỤ CỦA CHÚNG TÔI</h3></p>
									<blockquote>
											<p style="color:#222222">Hỗ trợ, ứng cứu mọi sự cố An toàn thông tin liên tục 24/07</p>
											<p style="color:#222222">Nghiên cứu và đào tạo đội ngũ chuyên gia An ninh mạng chất lượng cao</p>
											<p style="color:#222222">Xây dựng các sản phẩm công nghệ mang thương hiệu Việt Nam và do người Việt Nam làm chủ</p>
									</blockquote>
									<p style="color:#222222">“Làm mọi việc tốt nhất và nhanh nhất” – Đó là tiêu chí của chúng tôi</p>  --}}
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
																<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									
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