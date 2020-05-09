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
use App\Controllers\Controller;

class HomepageController extends Controller
{
    protected $carouselRepository;

    protected $aboutRepository;

    protected $testimonialRepository;

    protected $featureRepository;
    
    protected $pricingRepository;

    protected $memberRepository;

    public function __construct(
        CarouselRepository $carouselRepository,
        AboutRepository $aboutRepository,
        TestimonialRepository $testimonialRepository,
        FeatureRepository $featureRepository,
        PricingRepository $pricingRepository,
        MemberRepository $memberRepository
    ) {
        $this->carouselRepository = $carouselRepository;
        $this->aboutRepository = $aboutRepository;
        $this->testimonialRepository = $testimonialRepository;
        $this->featureRepository = $featureRepository;
        $this->pricingRepository = $pricingRepository;
        $this->memberRepository = $memberRepository;
    }

    public function index()
    {
        $carouselItems = $this->carouselRepository->getAll();
        $aboutItems = $this->aboutRepository->getAll();
        $testimonialsItems = $this->testimonialRepository->getAll();
        $featuresItems = $this->featureRepository->getAll();
        $pricingItems = $this->pricingRepository->getAll();
        $teamMembers = $this->memberRepository->getAllWithSocials();
        
        $this->view("home", compact(
            "carouselItems",
            "aboutItems",
            "testimonialsItems",
            "featuresItems",
            "pricingItems",
            "teamMembers"
        ));
    }
}