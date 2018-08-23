<section class="top-post-area pt-10">
    <div class="container no-padding">
        <div class="row small-gutters">
            <div class="col-lg-8 top-post-left">
                <div class="feature-image-thumb relative">
                    
                    <img class="img-fluid" src="@if(!isset($noibat[0]->image)){{ 'vnis/img/no-img/no-img-top0.jpg' }}@else{{Voyager::image($noibat[0]->thumbnail('top0'))}}@endif" alt="vnist">
                </div>
                <div class="top-post-details">
                    <ul class="tags">
                        <li><a href="/{{$noibat[0]->category->slug}}">{{$noibat[0]->category->name}}</a></li>
                    </ul>
                    <a href="/{{$noibat[0]->category->slug}}/{{$noibat[0]->slug}}">
                        <h3>{{$noibat[0]->title}}</h3>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-user"></span>{{$noibat[0]->author->name}}</a></li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$noibat[0]->created_at->format('d-m-Y')}}</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 top-post-right">
                <div class="single-top-post">
                    <div class="feature-image-thumb relative">
                        
                        <img class="img-fluid" src="@if(!isset($noibat[2]->image)){{ 'vnis/img/no-img/no-img-top12.jpg' }}@else{{ Voyager::image($noibat[2]->thumbnail('top12')) }}@endif" alt="vnist">
                    </div>
                    <div class="top-post-details">
                        <ul class="tags">
                            <li><a href="/{{$noibat[1]->category->slug}}">{{$noibat[1]->category->name}}</a></li>
                        </ul>
                        <a href="/{{$noibat[1]->category->slug}}/{{$noibat[1]->slug}}">
                            <h4>{{$noibat[1]->title}}</h4>
                        </a>
                        <ul class="meta">
                            <li><a href="#"><span class="lnr lnr-user"></span>{{$noibat[1]->author->name}}</a></li>
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$noibat[1]->created_at->format('d-m-Y')}}</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="single-top-post mt-10">
                    <div class="feature-image-thumb relative">
                        {{-- <div class="overlay overlay-bg"></div> --}}
                        <img class="img-fluid" src="@if(!isset($noibat[2]->image)){{ 'vnis/img/no-img/no-img-top12.jpg' }}@else{{ Voyager::image($noibat[2]->thumbnail('top12')) }}@endif" alt="vnist">
                    </div>
                    <div class="top-post-details">
                        <ul class="tags">
                            <li><a href="/{{$noibat[2]->category->slug}}">{{$noibat[2]->category->name}}</a></li>
                        </ul>
                        <a href="/{{$noibat[2]->category->slug}}/{{$noibat[2]->slug}}">
                            <h4>{{$noibat[2]->title}}</h4>
                        </a>
                        <ul class="meta">
                            <li><a href="#"><span class="lnr lnr-user"></span>{{$noibat[2]->author->name}}</a></li>
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$noibat[2]->created_at->format('d-m-Y')}}</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>