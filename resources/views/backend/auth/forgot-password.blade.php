@extends('backend.layouts.login')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #D3D0D0;">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-25">
                    <!--begin::Aside header-->
                    <!--end::Aside header-->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="min-height: 280px;background-size: 80%;background-repeat: no-repeat;background-position: center center;background-image: url(/assets/media/admin-console-banner.png)"></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->

                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <form method="POST" action="{{ route('admin.password.email') }}">
                            @csrf
                            <!--begin::Form group-->
                            
                            <!-- Email Address -->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">{{ __('label.email') }}</label>
                                {{ Form::text('email',null,['class' => 'form-control form-control-solid h-auto py-6 px-6 rounded-lg'. ($errors->has('email') ? ' is-invalid' : null)])}}
                                @error('email')
                                <div class="fv-plugins-message-container">
                                    <div class="fv-help-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <!-- Email Address -->

                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                {{ Form::submit(__('Email Password Reset Link'),['class' => 'btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3'])}}
                                <a href="{{ route('admin.login') }}" class="btn btn-default font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{ __('Back To Login') }}</a>
                            </div>
                            <!--end::Action-->
                        </form>
                    <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Signup-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer-->
            <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                    <span class="mr-1">{{date('Y')}} © {{ config('app.name') }}</span>
                </div>
            </div>
            <!--end::Content footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
@endsection
