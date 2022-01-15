@if (session('status'))
    <!--begin::Alert-->
    <div class="alert alert-primary">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Content-->
            <span>{{ session('status') }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
@endif

@if (session('success'))
    <!--begin::Alert-->
    <div class="alert alert-success">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Content-->
            <span>{{ session('success') }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
@endif

@if (session('error'))
    <!--begin::Alert-->
    <div class="alert alert-danger">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Content-->
            <span>{{ session('error') }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
@endif