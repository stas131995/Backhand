<?php

namespace App\Controllers;

use App\Repositories\CarouselRepository;
use Jenssegers\Blade\Blade;
use App\Models\CarouselModel;
use App\Repositories\AboutRepository;
use App\Models\AboutModel;
use App\Repositories\TestimonialsRepository;
use App\Models\TestimonialsModel;
use App\Repositories\FeaturesRepository;
use App\Models\FeaturesModel;
use App\Repositories\PricingRepository;
use App\Models\PricingModel;



class HomepageController
{
    public function index()
    {
        $carouselRepository = new CarouselRepository();
        $carouselItems = $carouselRepository->getAll();
        $aboutRepository = new AboutRepository();
        $aboutItems = $aboutRepository->getAll();
        $testimonialsRepository = new TestimonialsRepository();
        $testimonialsItems =$testimonialsRepository->getAll();
        $featuresRepository = new FeaturesRepository();
        $featuresItems =$featuresRepository->getAll();
        $pricingRepository = new PricingRepository();
        $pricingItems =$pricingRepository->getAll();
        
        $this->view("home", compact("carouselItems","aboutItems","testimonialsItems","featuresItems","pricingItems"));
    }

    protected function view(string $viewName, array $params)
    {
        $blade = new Blade(ROOT_DIR . '/src/views', ROOT_DIR . '/cache/views');
        echo $blade->render($viewName, $params);
    }
}