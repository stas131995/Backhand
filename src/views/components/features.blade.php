<div id="features" class="features-section">
    <div class="container text-center">
        <h2 class="section-title">Discover Features</h2>
        <p class="intro">AppKit comes with an AngularJS version, 4 colour schemes and 100+ components</p>
        
        <div class="tabbed-area row">
            
            <!-- Nav tabs -->
            <ul class="feature-nav nav nav-pill nav-stacked text-left col-md-4 col-sm-6 col-xs-12 col-md-push-8 col-sm-push-6 col-xs-push-0" role="tablist">
                @foreach ($items as $index => $featuresModel)
                    <li role="presentation" class="{{ $index === 0 ? 'active' : '' }}"><a href="#feature-{{ $index + 1 }}" aria-controls="feature-{{ $index + 1 }}" role="tab" data-toggle="tab"><i class="{{ $index === 0 ? 'fa fa-magic' : '' }}"></i>{{ $featuresModel->getLinkText() }}</a></li>  
                @endforeach              
            </ul>
            
            <!-- Tab panes -->
            <div class="feature-content tab-content col-md-8 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6 col-xs-pull-0">
                @foreach ($items as $index => $featuresModel)
                    <div role="tabpanel" class="tab-pane fade{{ $index === 0 ? ' in active' : '' }}" id="feature-{{ $index + 1 }}">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ $featuresModel->getImagePath() }}" alt="screenshot" ></a>
                    </div>
                @endforeach              
            </div><!--//feature-content-->

            
        </div><!--//tabbed-area-->
        
    </div><!--//container-->
</div><!--//features-->
