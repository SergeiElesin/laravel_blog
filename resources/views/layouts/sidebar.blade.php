<div class="sidebar">
    <div class="widget">
        <h2 class="widget-title">Popular Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($popular_posts as $post)
                    <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                       class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{ $post->getImage() }}" alt=""
                                 class="img-fluid float-left">
                            <h5 class="mb-1">{{ $post->title }}</h5>
                            <small>{{ $post->getPostDate() }}</small>
                            <small>| <i class="fa fa-eye"></i> {{ $post->views }}</small>
                        </div>
                    </a>
                @endforeach

            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->

    {{-- <div class="widget">
         <h2 class="widget-title">Instagram Feed</h2>
         <div class="instagram-wrapper clearfix">
             <a class="" href="#"><img src="{{ asset('public/assets/front/upload/small_09.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_01.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_02.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_03.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_04.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_05.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_06.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_07.jpg') }}" alt="" class="img-fluid"></a>
             <a href="#"><img src="{{ asset('public/assets/front/upload/small_08.jpg') }}" alt="" class="img-fluid"></a>
         </div><!-- end Instagram wrapper -->
     </div><!-- end widget -->--}}

    <div class="widget">
        <h2 class="widget-title">Categories</h2>
        <div class="link-widget">
            <ul>
                @foreach($cats as $cat)
                    <li><a href="{{ route('categories.single', ['slug'=>$cat->slug]) }}">{{ $cat->title }} <span>{{ $cat->posts_count }}</span></a></li>
                @endforeach
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div><!-- end sidebar -->
