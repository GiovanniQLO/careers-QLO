@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<div class="container google-jobs-container">
    <div class="google-jobs-tabs mb-3">
        <ul class="nav nav-tabs" id="jobsTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ !request('jobType') ? 'active' : '' }}"
                   href="{{ route('jobs.index') }}"
                   role="tab">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request('jobType') == 'Legal' ? 'active' : '' }}"
                   href="{{ route('jobs.index') }}?jobType=Legal"
                   role="tab">Legal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request('jobType') == 'Tech' ? 'active' : '' }}"
                   href="{{ route('jobs.index') }}?jobType=Tech"
                   role="tab">Tech</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request('jobType') == 'Support' ? 'active' : '' }}"
                   href="{{ route('jobs.index') }}?jobType=Support"
                   role="tab">Support</a>
            </li>
        </ul>
    </div>

    <div class="google-jobs-layout">
        <div class="google-jobs-list" id="jobsTabContent">
            @include('jobs.partials.list', [
                'jobs' => isset($filteredJobs) ? $filteredJobs : $jobsAll
            ])
        </div>

        <div class="google-jobs-detail">
            <div id="jobDetailPlaceholder" class="text-center text-muted">
                Select a job to see details
            </div>
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener('click', function(e) {
    const card = e.target.closest('.google-job-card');
    if (!card) return;

    document.querySelectorAll('.google-job-card').forEach(c => c.classList.remove('active'));
    card.classList.add('active');

    const jobId = card.getAttribute('data-job-id');
    const jobTitle = card.querySelector('.job-title').innerText;
    const jobCompany = card.querySelector('.job-company').innerText;
    const jobLocation = card.querySelector('.job-meta span:last-child')?.innerText || 'Not specified';
    const jobDescription = card.querySelector('.job-short').innerText;
    const skillsData = card.getAttribute('data-skills');
    const languagesData = card.getAttribute('data-languages');

    const skills = skillsData ? JSON.parse(skillsData) : [];
    const languages = languagesData ? JSON.parse(languagesData) : [];

    const badges = [];
    const badgeElements = card.querySelectorAll('.job-badges .badge');
    badgeElements.forEach(badge => {
        badges.push(badge.innerText.trim());
    });

    document.getElementById('jobDetailPlaceholder').innerHTML = `
        <div class="job-details">
            <h3 class="job-detail-title">${jobTitle}</h3>
            <h4 class="job-detail-company">${jobCompany}</h4>

            <div class="job-detail-info">
                <p><strong>Location:</strong> ${jobLocation}</p>
                <p><strong>Type:</strong> ${card.querySelector('.job-badges .badge-type') ? card.querySelector('.job-badges .badge-type').textContent.replace(/Clock/g, '').replace(/\s+/g, ' ').trim() : 'Not specified'}</p>
            </div>

            <div class="job-detail-badges mb-3">
                ${badges.map(badge => `<span class="badge badge-detail me-2">${badge}</span>`).join('')}
            </div>

            <div class="job-detail-description">
                <h5>Description</h5>
                <p>${jobDescription}</p>
            </div>

            ${skills.length > 0 ? `
            <div class="job-detail-skills mb-3">
                <h5>Skills Required</h5>
                <div class="skills-list">
                    ${skills.map(skill => `<span class="skill-tag badge me-2">${skill}</span>`).join('')}
                </div>
            </div>
            ` : ''}

            ${languages.length > 0 ? `
            <div class="job-detail-languages mb-3">
                <h5>Languages</h5>
                <div class="languages-list">
                    ${languages.map(lang => `<span class="language-tag badge me-2">${lang}</span>`).join('')}
                </div>
            </div>
            ` : ''}

            <div class="job-detail-actions mt-4">
                <button class="btn btn-primary">Apply Now</button>
                <button class="btn btn-outline-secondary ms-2">Save Job</button>
            </div>
        </div>
    `;
});
</script>
