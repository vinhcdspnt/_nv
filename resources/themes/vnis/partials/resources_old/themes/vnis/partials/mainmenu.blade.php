{{-- <ul class="nav-menu">
    <li class="menu-active"><a href="index.html">Home</a></li>
    <li><a href="archive.html">Archive</a></li>
    <li><a href="category.html">Category</a></li>
    <li class="menu-has-children"><a href="">Post Types</a>
        <ul>
            <li><a href="standard-post.html">Standard Post</a></li>
            <li><a href="image-post.html">Image Post</a></li>
            <li><a href="gallery-post.html">Gallery Post</a></li>
            <li><a href="video-post.html">Video Post</a></li>
            <li><a href="audio-post.html">Audio Post</a></li>
        </ul>
    </li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
</ul> --}}
{{-- <ul class="nav-menu">

    @foreach($items as $menu_item)
        <li {{url()->current()==url($menu_item->link())?'class=menu-active':''}}><a href="{{url($menu_item->link())  }}">{{ $menu_item->title }}</a></li>
    @endforeach    

</ul> --}}
<ul class="nav-menu">

        @php
        
            if (Voyager::translatable($items)) {
                $items = $items->load('translations');
            }
        
        @endphp
        
        @foreach ($items as $item)
        
            @php
            
                $originalItem = $item;
                if (Voyager::translatable($item)) {
                    $item = $item->translate($options->locale);
                }
        
                $isActive = null;
                //$styles = null;
                //$icon = null;MainMenu
        
                // Background Color or Color
/*                
                if (isset($options->color) && $options->color == true) {
                    $styles = 'color:'.$item->color;
                }
                if (isset($options->background) && $options->background == true) {
                    $styles = 'background-color:'.$item->color;
                }
//*/        
                // Check if link is current
                if(url($item->link()) == url()->current()){
                    $isActive = 'menu-active';
                }
        
                // Set Icon
/*                
                if(isset($options->icon) && $options->icon == true){
                    $icon = '<i class="' . $item->icon_class . '"></i>';
                }
*/        
            @endphp
        
            <li class="{{ $isActive }}">
                <a href="{{ url($item->link()) }}" target="{{ $item->target }}">
                    
                   {{ $item->title }}
                </a>
                {{-- @if(!$originalItem->children->isEmpty())
                    @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])
                @endif --}}
            </li>
        @endforeach
        
        </ul>
        