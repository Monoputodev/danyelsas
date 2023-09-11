<!-- testimonail start here -->
<div class="testimonails">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <h4>Testimonials</h4>
                <div class="img">
                    <img src="{{ asset('') }}assets/web/images/header2/organic-icon.png" alt="icon" title="icon"
                      class="img-fluid" />
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="owl-carousel testimonail1 text-center">
                    @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="box">
                            <img src="{{asset('')}}uploads/testimonials/{{ $testimonial->image }}" style="height: 50px"
                              class="img-fluid mx-auto" alt="img" title="img" />
                            <p>"{{ $testimonial->description }}"</p>
                            <h4>
                                {{ $testimonial->title }}
                            </h4>
                            <h6><small class="text-small">{{ $testimonial->subtitle }}</small>
                            </h6>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>