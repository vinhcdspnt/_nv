<div class="latest-post-wrap">
        <h4 class="title vinh">TIN TỨC CÔNG NGHỆ</h4>
        @foreach ($congnghe as $cn)
            <div class="single-latest-post row align-items-center">
                <div class="col-lg-5 post-left">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="@if(!isset($noibat[0]->image)){{ 'vnis/img/no-img/no-img-medium.jpg' }}@else{{Voyager::image($noibat[0]->thumbnail('medium'))}}@endif" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="/{{$cn->category->slug}}">{{$cn->category->name}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-7 post-right">
                    <a href="/{{$cn->category->slug}}/{{$cn->slug}}">
                        <h4 class="vinh">{{$cn->title}}</h4>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-user"></span>{{$cn->author->name}}</a></li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$cn->created_at->format('d-m-Y')}}</a></li>
                        
                    </ul>
                    <p class="excert">
                        {{$cn->excerpt}}
                    </p>
                </div>
            </div>
        @endforeach        
    </div>