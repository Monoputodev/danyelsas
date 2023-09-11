<div class="slide">
    <div class="slideshow1 owl-carousel">
        @foreach ($heros as $hero)
        <div class="item positon-relative">
            <img src="{{asset('')}}uploads/heros/{{ $hero->image }}" alt="banner" title="banner"
              class="img-fluid sliderchange" />
            <div class="hero-caption d-none d-md-block">
                <h1>{{ $hero->title }}</h1>
                <h5>{{ $hero->subtitle }}</h5>
            </div>
        </div>
        @endforeach


    </div>
</div>
