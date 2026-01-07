<section id="positions" class="positions-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold text-secondary-custom">Current Openings</h2>
                <p class="lead">Check out our available positions</p>
            </div>
        </div>
        <div class="row">
            @foreach ($positions as $position)
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary-custom">{{ $position->title }}</h5>
                        <p class="card-text">{{ $position->description }}</p>
                        <ul class="list-unstyled">
                            <li><strong>Location:</strong> {{ $position->location }}</li>
                            <li><strong>Type:</strong> {{ $position->type }}</li>
                            <li><strong>Experience:</strong> {{ $position->experience }}</li>
                        </ul>
                        <a href="{{ $position->apply_url }}" class="btn btn-primary-custom">Apply Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>