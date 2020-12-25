<div class="banner">
    <div class="container">
        <div class="row">
            @foreach($banners as $banner)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{$banner->banner_photo}}" alt="">
                    </div>
                </div>
            @endforeach()
        </div>
    </div>
</div>
