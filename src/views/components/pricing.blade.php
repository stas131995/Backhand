<div id="pricing" class="pricing-section">
    <div class="container text-center">
        <h2 class="section-title">Pricing</h2>
        <div class="intro">AppKit's future updates are 100% FREE for existing customers</div>
        <div class="pricing-wrapper">
            @foreach ($items as $index => $pricingModel)
                <div class="item item-{{ $index+1 }} col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">
                            {{ $pricingModel->getTitle() }}
                        </h3>
                        <div class="price-figure">
                            <span class="currency">
                                {{ $pricingModel->getCurrency() }}
                            </span>
                            <span class="number">
                                {{ $pricingModel->getPrice() }}
                            </span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>{{ $pricingModel->getDescription() }}</p>
                            <a href="#" target="_blank">License Details</a>
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="#">Buy Now</a>
                    </div><!--//item-inner-->
                </div><!--//item-->
            @endforeach
        </div><!--//pricing-wrapper-->
    </div><!--//container-->
</div><!--//pricing-section-->
