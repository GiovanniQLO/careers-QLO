<div class="google-jobs-list-content">
    @if($jobs->count() > 0)
        @foreach($jobs as $job)
            <div class="google-job-card" data-job-id="{{ $job['id'] ?? $job->id }}"
                 data-skills="{{ json_encode($job['skills'] ?? $job->skills) }}"
                 data-languages="{{ json_encode($job['languages'] ?? $job->languages) }}">
                <div class="job-title">{{ $job['title'] ?? $job->title }}</div>
                <div class="job-company">{{ $job['company'] ?? $job->company }}</div>

                <div class="job-badges mb-2">
                    @if(isset($job['type']) && $job['type'])
                        <span class="badge badge-type me-2"><i class="fas fa-clock me-1"></i>{{ $job['type'] }}</span>
                    @elseif(isset($job->type) && $job->type)
                        <span class="badge badge-type me-2"><i class="fas fa-clock me-1"></i>{{ $job->type }}</span>
                    @endif

                    @if(isset($job['location']) && str_contains(strtolower($job['location']), 'remote'))
                        <span class="badge badge-remote me-2"><i class="fas fa-laptop me-1"></i>Remote</span>
                    @elseif(isset($job->location) && str_contains(strtolower($job->location), 'remote'))
                        <span class="badge badge-remote me-2"><i class="fas fa-laptop me-1"></i>Remote</span>
                    @endif

                    @if(isset($job['urgent']) && $job['urgent'])
                        <span class="badge badge-urgent me-2"><i class="fas fa-exclamation-circle me-1"></i>Urgent</span>
                    @elseif(isset($job->urgent) && $job->urgent)
                        <span class="badge badge-urgent me-2"><i class="fas fa-exclamation-circle me-1"></i>Urgent</span>
                    @endif
                </div>

                <div class="job-meta">
                    @if(!(isset($job['location']) && str_contains(strtolower($job['location']), 'remote')) && !(isset($job->location) && str_contains(strtolower($job->location), 'remote')))
                        <span><i class="fas fa-map-marker-alt me-1"></i>{{ $job['location'] ?? $job->location }}</span>
                    @endif
                </div>

                <div class="job-short">{{ Str::limit($job['description'] ?? $job->description, 100) }}</div>
            </div>
        @endforeach
    @else
        <div class="no-results text-center p-5">
            <h4>No jobs found</h4>
            <p>No jobs match your current filters.</p>
        </div>
    @endif
</div>
