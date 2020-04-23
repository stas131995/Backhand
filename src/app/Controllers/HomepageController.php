<?php

namespace App\Controllers;

use App\Repositories\CarouselRepository;
use Jenssegers\Blade\Blade;
use App\Entities\CarouselEntity;
use App\Repositories\AboutRepository;
use App\Entities\AboutEntity;
use App\Repositories\TestimonialRepository;
use App\Entities\TestimonialEntity;
use App\Repositories\FeatureRepository;
use App\Entities\FeatureEntity;
use App\Repositories\PricingRepository;
use App\Entities\PricingEntity;
use App\Repositories\MemberRepository;
use App\Entities\MemberEntity;




class HomepageController
{
    public function index()
    {
        $carouselRepository = new CarouselRepository();
        $carouselItems = $carouselRepository->getAll();

        $aboutRepository = new AboutRepository();
        $aboutItems = $aboutRepository->getAll();

        $testimonialsRepository = new TestimonialRepository();
        $testimonialsItems = $testimonialsRepository->getAll();

        $featuresRepository = new FeatureRepository();
        $featuresItems = $featuresRepository->getAll();

        $pricingRepository = new PricingRepository();
        $pricingItems = $pricingRepository->getAll();

        $memberRepository = new MemberRepository();
        $teamMembers = $memberRepository->getAllWithSocials();
        
        $this->view("home", compact(
            "carouselItems",
            "aboutItems",
            "testimonialsItems",
            "featuresItems",
            "pricingItems",
            "teamMembers"
        ));
    }

    protected function view(string $viewName, array $params)
    {
        $blade = new Blade(ROOT_DIR . '/src/views', ROOT_DIR . '/cache/views');
        echo $blade->render($viewName, $params);
    }
}