<div class="col-xl-12 col-md-12">
    <div class="card jobcard job-card overflow-hidden br-0 overflow-hidden">
        <div class="d-md-flex">
            <div class="card overflow-hidden  border-0 box-shadow-0 border-left br-0 mb-0">
                <div class="card-body pt-0 pt-md-5">
                    <div class="item-card9">
                        <a href="javascript:void(0)" class="text-dark">
                            <h3 class="font-weight-semibold mt-1 job-card__title">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i> {{ $job['title'] }}
                            </h3>
                        </a>
                        <div class="mt-2 mb-2">
                            <a href="javascript:void(0)" class="mr-3 job-details-labels d-inline">
                                <span class="job-details-labels__type"><i class="fa fa-clock-o mr-1"></i> {{ $job['type'] }}</span>
                            </a>
                            <a href="javascript:void(0)" class="mr-3 job-details-labels d-inline">
                                <span class="job-details-labels__company"><i class="fa fa-briefcase mr-1"></i> {{ $job['company'] }}</span>
                            </a>
                        </div>
                        <p class="mb-0 leading-tight fs-18">
                            {{ Str::limit($job['description'], 200) }}
                        </p>
                    </div>
                </div>
                <div class="card-footer pt-3 pb-3 job-card__footer">
                    <div class="item-card9-footer d-flex">
                        <div class="d-flex align-items-center mb-3 mb-md-0 mt-auto posted">
                            <div class="">
                                <a href="profile.html" class="fs-14 text-dark mb-1">Posted by: </a>
                                <span class="fs-16 qlotxt font-weight-bold job-card__company-name"> {{ $job['company'] }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center jobactionbtn ml-auto">
                            <a href="javascript:void(0)" class="btn rounded-0 btn-secondary-custom icons applyForJob mr-2" data-job_id="{{ $job['id'] }}" data-toggle="modal" data-target="#apply">
                                <i class="fa fa-check mr-1"></i>Apply
                            </a>
                            <a href="#job_{{ $job['id'] }}" data-toggle="collapse" data-parent="#job_{{ $job['id'] }}" class="btn rounded-0 btn-primary-custom jobseemore">
                                <i class="fa fa-eye" aria-hidden="true"></i> See More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="job_{{ $job['id'] }}" class="panel-collapse collapse in border-top">
            <div class="card-body border-top">
                <h3 class="mb-4 font-weight-bold job-description__title">Job Description</h3>
                <div class="mb-4 fs-16 jobDescription">
                    {{ $job['description'] }}
                </div>
                <h3 class="mb-4 font-weight-bold job-details__title">Job Details</h3>
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="table-responsive">
                            <table class="table row table-borderless w-100 m-0 text-nowrap job-details__table">
                                <tbody class="col-lg-12 col-xl-6 p-0">
                                    <tr>
                                        <td class="w-150 px-0">
                                            <span class="font-weight-semibold job-detail__label">Job Type</span>
                                        </td>
                                        <td> <span>:</span> </td>
                                        <td>
                                            <span>{{ $job['jobType'] }}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w-150 px-0">
                                            <span class="font-weight-semibold job-detail__label">Level Of Urgency</span>
                                        </td>
                                        <td> <span>:</span> </td>
                                        <td>
                                            <span>{{ $job['urgent'] ? 'Urgent' : 'Normal' }}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w-150 px-0">
                                            <span class="font-weight-semibold job-detail__label">Type</span>
                                        </td>
                                        <td> <span>:</span> </td>
                                        <td>
                                            <span> {{ $job['type'] }}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w-150 px-0">
                                            <span class="font-weight-semibold job-detail__label">Job Location</span>
                                        </td>
                                        <td> <span>:</span> </td>
                                        <td>
                                            <span> {{ $job['location'] }}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w-150 px-0">
                                            <span class="font-weight-semibold job-detail__label">Required Languages</span>
                                        </td>
                                        <td> <span>:</span> </td>
                                        <td>
                                            @foreach($job['languages'] as $language)
                                                <span class="label label-info job-detail__language">{{ $language }}</span>
                                            @endforeach
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w-150 px-0">
                                            <span class="font-weight-semibold job-detail__label">Required Skills</span>
                                        </td>
                                        <td> <span>:</span> </td>
                                        <td>
                                            @foreach($job['skills'] as $skill)
                                                <span class="label label-warning job-detail__skill">{{ $skill }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary-custom px-5 rounded-pill icons applyForJob" data-job_id="{{ $job['id'] }}" data-toggle="modal" data-target="#apply">
                                <i class="fa fa-check mr-1"></i>Apply
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="list-id">
                    <div class="row">
                        <div class="col">
                            <a class="mb-0 qlotxt font-weight-semibold job-card__id">Job ID : #{{ $job['id'] }}</a>
                        </div>
                        <div class="col col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>