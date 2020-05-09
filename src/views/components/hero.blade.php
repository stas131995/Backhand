{{--
    @prop CarouselModel[] $items
    @prop string $figureImage
--}}
<div id="hero" class="hero-section">    
    <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">   
        <div class="figure-holder-wrapper">
            <div class="container">
                <div class="row">
                    <div class="figure-holder">
                        <img class="figure-image img-responsive" src="{{ $figureImage }}" alt="image">
                    </div><!--//figure-holder-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//figure-holder-wrapper-->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach ($items as $index => $carouselModel)
                <li
                    data-slide-to="{{ $index }}"
                    data-target="#hero-carousel"
                    class="{{ $index === 0 ? 'active' : '' }}"
                    ></li>
            @endforeach
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($items as $index => $carouselModel)
            <div class="item item-{{ $index + 1 }} {{ $index === 0 ? 'active' : '' }}">
                <div class="item-content container">
                    <div class="item-content-inner">
                        <h2 class="heading">
                            {{ $carouselModel->getTitle() }}
                        </h2>
                        <p class="intro">
                            {{ $carouselModel->getDescription() }}
                        </p>
                        <a class="btn btn-primary btn-cta" href="#">
                            {{ $carouselModel->getLinkText() }}
                        </a>
                    </div><!--//item-content-inner-->
                </div>
            </div><!--//item-->
            @endforeach
        </div><!--//carousel-inner-->
    </div><!--//carousel-->
</div>