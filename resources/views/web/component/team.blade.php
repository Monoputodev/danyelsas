<div class="sc-team-section-area sc-long-map sc-pb-100 sc-md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="sc-heading-area sc-mb-55 text-center">
                    <span class="sub-title"><i class="icon-line"></i> Expert Member</span>
                    <h2 class="title">Expert Dedicated Member Lead The {{ $content->website_name }}</h2>
                </div>
            </div>
        </div>
        <div class="swiper sc-pagination-active sc-swiper-slider">
            <div class="swiper-wrapper">
                @foreach ($teams as $item)
                    <div class="swiper-slide">
                        <div class="sc-team-item text-center">
                            <div class="item-img">
                                <div class="team-image">
                                    <a href="#"><img src="{{ asset('uploads/teams/' . $item->image) }}"
                                            alt="Team" /></a>
                                </div>
                                <div class="sc-team-content">
                                    <h4><a href="#" class="title">{{ $item->name }}</a></h4>
                                    <span>{{ $item->designation }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
