@extends('layouts.dashboard.full')

@section('content')
    <form class="form w-100" method="post" action="{{ route('password.email') }}">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Forgot Password</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Forgot your Password? No problem. <br> Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
            <!--end::Link-->
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
            <input class="form-control form-control-lg form-control-solid @error('email') border border-danger @enderror" type="text" name="email" autocomplete="off" value="{{ old('email') }}"/>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5" id="kt_button">
                <span class="indicator-label">Email Password Reset Link</span>
                <span class="indicator-progress">Please wait... 
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
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