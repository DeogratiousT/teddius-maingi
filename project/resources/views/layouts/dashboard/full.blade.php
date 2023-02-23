<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Teddius Maingi</title>
		<meta name="description" content="Teddius Maingi" />
		<meta name="keywords" content="Teddius " />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />

        <!-- Favicons -->
        <link href=" {{ asset('myfiles/images/favicon.ico') }}" rel="icon">
        <link href="{{ asset('myfiles/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->

        <!-- begin::Boostrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <!-- end::Boostrap Icons -->

		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

        <!--begin::Page Vendor Stylesheets(used by this page)-->
		    @yield('head-imports')
        <!--end::Page Vendor Stylesheets-->

		<!--Begin::Google Tag Manager -->
            {{-- TODO --}}
		<!--End::Google Tag Manager -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Main Content -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
                <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                            <!--begin::Logo-->
                            <a href="{{ route('dashboard') }}" class="py-9 mb-5">
                                <h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">TEDDIUS MAINGI</h1>
                                {{-- <img alt="Logo" src="/metronic8/demo3/assets/media/logos/logo-2.svg" class="h-60px" /> --}}
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Illustration-->
                        <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(/myfiles/images/nobg.png)"></div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Aside-->
                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid py-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column flex-column-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                            <!--begin::Form-->
                                @yield('content')
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
			<!--end::Main Content -->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "/";</script>

		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/js/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Page Custom Javascript(used by this page)-->
            @stack('scripts')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->

		<!--Begin::Google Tag Manager (noscript) -->
            {{-- TODO --}}
		<!--End::Google Tag Manager (noscript) -->
	</body>
	<!--end::Body-->
</html>