<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($sliders as $slider)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{$slider->photo}}">
                            <h5><a href="#">{{$slider->name}}</a></h5>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
