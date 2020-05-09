<div id="testimonials" class="testimonials-section">
    <div class="container">
        <h2 class="section-title text-center">Many Happy Customers</h2>
        @foreach ($testimonialsItems as $testimonialsModel)
            <div class="item center-block">
                <div class="profile-holder">
                    <img class="profile-image" src="{{ $testimonialsModel->getImagePath() }}" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>{{ $testimonialsModel->getTitle() }}</p>
                        <div class="quote-source">
                            <span class="name">{{ $testimonialsModel->getCustomerName() }},</span>
                            <span class="meta">{{ $testimonialsModel->getCustomerCountry() }}</span>
                        </div><!--//quote-source-->
                    </blockquote>
                </div><!--//quote-holder-->
            </div><!--//item-->
        @endforeach
    </div><!--//container-->
</div><!--//testimonials-->
