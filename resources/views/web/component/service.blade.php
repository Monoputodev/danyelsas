<section class="services-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <h4>Our Services</h4>

                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                    <div class="container">
                        <div class="row clearfix">
                            @foreach ($services as $service)

                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <div class="product-thumb">
                                    <div class="image">
                                        <img src="{{ asset('') }}uploads/services/{{ $service->image }}" alt="image"
                                          title="image" class="img-fluid" />

                                    </div>
                                    <div class="caption text-center">

                                        <h2><a href="shop.html">{{ $service->title }}</a></h2>
                                        <p class="price">{{ $service->description }}</p>
                                    </div>
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