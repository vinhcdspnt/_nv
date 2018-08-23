<!-- Start latest-post Area -->
<section class="latest-post-area pb-120">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-8 post-list">
                <!-- Start latest-post Area -->
                    @include('theme::partials.lastest-post')
                <!-- End latest-post Area -->
                
                <!-- Start banner-ads Area -->
                {{-- <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                    <img class="img-fluid" src="vnis/img/banner-ad.jpg" alt="">
                </div> --}}
                <!-- End banner-ads Area -->
                <!-- Start popular-post Area -->
                    @include('theme::partials.popular-post')
                <!-- End popular-post Area -->

            </div>
            <div class="col-lg-4">
                <div class="sidebars-area">
                    @include('theme::partials.editor-pick-post')
                    <div class="single-sidebar-widget ads-widget">
                        <img class="img-fluid" src="vnis/img/sidebar-ads.jpg" alt="">
                    </div>

                    @include('theme::partials.most-popular')
                    @include('theme::partials.social-networks')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End latest-post Area -->