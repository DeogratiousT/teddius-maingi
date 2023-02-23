@extends('layouts.dashboard.full')

@section('content')
    <form class="form w-100" method="post" action="{{ route('login') }}">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Sign In to Agrima</h1>
            <!--end::Title-->
            <!-- begin::Status -->
            @include('includes.dashboard.messages')
            <!-- end::Status -->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid @error('email') border border-danger @enderror" type="text" name="email" autocomplete="off" />
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                <!--end::Label-->
                <!--begin::Link-->
                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid @error('password') border border-danger @enderror" type="password" name="password" autocomplete="off" />
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_button" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Continue</span>
                <span class="indicator-progress">Please wait... 
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->
            {{-- <!--begin::Separator-->
            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
            <!--end::Separator-->
            <!--begin::Google link-->
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
            <img alt="Logo" src="/metronic8/demo3/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
            <!--end::Google link-->
            <!--begin::Google link-->
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
            <img alt="Logo" src="/metronic8/demo3/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
            <!--end::Google link--> --}}
        </div>
        <!--end::Actions-->
    </form>        
@endsection

@push('scripts')
    <script>
        // Element to indecate
        var button = document.querySelector("#kt_button");

        // Handle button click event
        button.addEventListener("click", function() {
            // Activate indicator
            button.setAttribute("data-kt-indicator", "on");
        });
    </script>
@endpush