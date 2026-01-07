<section class="testimonials-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold text-secondary-custom">What Our Employees Say</h2>
                <p class="lead">Hear from our team members about their experience</p>
            </div>
        </div>
        <div class="row">
            @foreach ($testimonials as $testimonial)
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <p class="card-text text-secondary-custom">"{{ $testimonial->quote }}"</p>
                        <footer class="blockquote-footer text-primary-custom">{{ $testimonial->name }} <cite title="Source Title">{{ $testimonial->role }} · {{ $testimonial->location }}</cite></footer>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>