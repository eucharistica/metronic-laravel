<!--begin::Authentication - 403 Forbidden -->
<div class="d-flex flex-column flex-root">
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('{{ image('auth/bg1.jpg') }}');
        }

        [data-bs-theme="dark"] body {
            background-image: url('{{ image('auth/bg1-dark.jpg') }}');
        }
    </style>
    <!--end::Page bg image-->

    <!--begin::Authentication - Content-->
    <div class="d-flex flex-column flex-center flex-column-fluid">

        <!--begin::Card-->
        <div class="card card-flush w-lg-650px py-5">
            <!--begin::Card body-->
            <div class="card-body py-15 py-lg-5">

                <!--begin::Title-->
                <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">
                    Access Denied
                </h1>
                <!--end::Title-->

                <!--begin::Text-->
                <div class="fw-semibold fs-6 text-gray-500 mb-7">
                    You do not have permission to access this page.
                    <br>
                    Please contact your administrator if you believe this is a mistake.
                </div>
                <!--end::Text-->

                <!--begin::Illustration-->
                <div class="mb-3">
                    <img src="{{ image('auth/403-error.png') }}" class="mw-100 mh-300px theme-light-show" alt="403 error"/>
                    <img src="{{ image('auth/403-error-dark.png') }}" class="mw-100 mh-300px theme-dark-show"  alt="403 error dark"/>
                </div>
                <!--end::Illustration-->

                <!--begin::Link-->
                <div class="mb-0">
                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary">
                        Return Home
                    </a>
                </div>
                <!--end::Link-->

            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->

    </div>
    <!--end::Authentication - Content-->
</div>
<!--end::Authentication - 403 Forbidden -->
