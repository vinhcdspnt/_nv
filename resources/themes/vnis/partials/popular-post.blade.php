<div class="popular-post-wrap">
        <h4 class="title vinh">DỊCH VỤ AN TOÀN THÔNG TIN</h4>
        
        <div class="feature-post relative">
            <div class="feature-img relative">

                <img class="img-fluid" src="@if(!isset($dichvu[0]->image)){{ 'vnis/img/no-img/no-img-content.jpg' }}@else{{Voyager::image($dichvu[0]->thumbnail('content'))}}@endif" alt="">
            </div>
            <div class="details">
                <ul class="tags">
                    <li><a href="/{{$dichvu[0]->category->slug}}">{{$dichvu[0]->category->name}}</a></li>
                </ul>
                <a href="/{{$dichvu[0]->category->slug}}//{{$dichvu[0]->slug}}">

                    <h3 class="tieu-de-top0">{{$dichvu[0]->title}}</h3>
                </a>
                <ul class="meta">
                    <li><span class="lnr lnr-user"></span>{{$dichvu[0]->author->name}}</a></li>
                    <li><span class="lnr lnr-calendar-full"></span>{{$dichvu[0]->created_at->format('d-m-Y')}}</a></li>   
                </ul>
            </div>
        </div>
        
            <div class="row mt-20 medium-gutters">
                @for($i = 1;$i<$dichvu->count();$i++)                
                <div class="col-lg-6 single-popular-post">
                    <div class="feature-img-wrap relative">
                        <div class="feature-img relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="@if(!isset($dichvu[$i]->image)){{ 'vnis/img/no-img/no-img-medium2.jpg' }}@else{{Voyager::image($dichvu[1]->thumbnail('medium2'))}}@endif" alt="">
                        </div>
                        <ul class="tags">
                            <li><a href="/{{$dichvu[$i]->category->slug}}">{{$dichvu[$i]->category->name}}</a></li>
                        </ul>
                    </div>
                    <div class="details">
                        <a href="/{{$dichvu[$i]->category->slug}}//{{$dichvu[$i]->slug}}">
                            <h4>{{$dichvu[$i]->title}}</h4>
                        </a>
                        <ul class="meta">
                            <li><span class="lnr lnr-user"></span>{{$dichvu[$i]->author->name}}</a></li>
                            <li><span class="lnr lnr-calendar-full"></span>{{$dichvu[$i]->created_at->format('d-m-Y')}}</a></li>
                            
                        </ul>
                        <p class="excert">
                            {{$dichvu[$i]->excerpt}}
                        </p>
                    </div>
                </div>
                @endfor                
                {{--  <div class="col-lg-6 single-popular-post">
                    <div class="feature-img-wrap relative">
                        <div class="feature-img relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="@if(!isset($dichvu[2]->image)){{ 'vnis/img/no-img/no-img-medium2.jpg' }}@else{{Voyager::image($dichvu[2]->thumbnail('medium2'))}}@endif" alt="">
                        </div>
                        <ul class="tags">
                            <li><a href="/{{$dichvu[2]->category->slug}}">{{$dichvu[2]->category->name}}</a></li>
                        </ul>
                    </div>

                    <div class="details"> 
                        <a href="/{{$dichvu[2]->category->slug}}//{{$dichvu[2]->slug}}">
                            <h4>{{$dichvu[2]->title}}</h4>
                        </a>
                        <ul class="meta">
                            <li><span class="lnr lnr-user"></span>{{$dichvu[2]->author->name}}</a></li>
                            <li><span class="lnr lnr-calendar-full"></span>{{$dichvu[2]->created_at->format('d-m-Y')}}</a></li>
                            
                        </ul>
                        <p class="excert">
                            {{$dichvu[2]->excerpt}}
                        </p>
                    </div>
                </div>  --}}
            </div>
        
    </div>