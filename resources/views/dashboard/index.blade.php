@extends('layouts.dashboard.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Mixed Widget 13-->
                    <div class="card card-xl-stretch mb-xl-10" style="background-color: #F7D9E3">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Projects</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-13-chart" style="height: 100px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Number-->
                                <span class="text-dark fw-bolder fs-3x me-2 lh-0">{{ $projects }}</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 13-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-xl-10" style="background-color: #CBF0F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Contacts</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-14-chart" style="height: 100px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Number-->
                                <span class="text-dark fw-bolder fs-3x me-2 lh-0">{{ $contacts }}</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bolder fs-6 lh-0"></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
