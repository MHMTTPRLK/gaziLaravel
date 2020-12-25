<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">

                        <div class="latest-prdouct__slider__item">
                            @foreach($uruns as $urun)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{$urun->photo}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$urun->productName}}</h6>
                                    <span>{{$urun->price}}</span>
                                </div>
                            </a>

                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach($datas as $data)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{$data->photo}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{$data->productName}}</h6>
                                    <span>{{$data->price}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach($uruns as $urun)
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$urun->photo}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$urun->productName}}</h6>
                                        <span>{{$urun->price}}</span>
                                    </div>
                                </a>

                            @endforeach

                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach($datas as $data)
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$data->photo}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$data->productName}}</h6>
                                        <span>{{$data->price}}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach($uruns as $urun)
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$urun->photo}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$urun->productName}}</h6>
                                        <span>{{$urun->price}}</span>
                                    </div>
                                </a>

                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach($datas as $data)
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{$data->photo}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$data->productName}}</h6>
                                        <span>{{$data->price}}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
