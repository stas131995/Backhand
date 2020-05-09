<div id="about" class="about-section">
    <div class="container text-center">
        <h2 class="section-title">Why Use AppKit?</h2>
        <p class="intro">Appkit uses modern front-end technologies and is packed with useful components and widgets to speed up your app development</p>
        <ul class="technologies list-inline">
            <li><img src="assets/images/logo-bootstrap.svg" alt="Bootstrap"></li>
            <li><img src="assets/images/logo-angular.svg" alt="Angular"></li>
            <li><img src="assets/images/logo-html5.svg" alt="HTML5"></li>
            <li><img src="assets/images/logo-css3.svg" alt="CSS3"></li>
            <li><img src="assets/images/logo-less.svg" alt="Less"></li>
            <li><img src="assets/images/logo-jquery.svg" alt="jQuery"></li>
        </ul>
        <div class="items-wrapper row">
            @foreach ($aboutItems as $aboutModel)
                    <div class="item col-sm-4 col-xs-12">
                        <div class="item-inner">
                            <div class="figure-holder">
                                <img class="figure-image" src="{{ $aboutModel->getImagePath() }}" alt="image">
                            </div><!--//figure-holder-->
                            <h3 class="item-title">{{ $aboutModel->getTitle() }}</h3>
                            <div class="item-desc">
                                {{  $aboutModel->getDescription() }}
                            </div><!--//item-desc-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
            @endforeach
        </div><!--//items-wrapper-->
    </div><!--//container-->
</div><!--//about-section-->
