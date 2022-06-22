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
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">{{ __('label.welcome_console_title',['param' => config('app.name')]) }}</h3>
                            </div>
                        <!--begin::Title-->
                            <!--begin::Form group-->
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
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('label.password') }}</label>
                                <a href="{{ route('admin.password.request') }}" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">{{ __('label.forgot_password') }}</a>
                            </div>
                            {{ Form::password('password',['class' => 'form-control form-control-solid h-auto py-6 px-6 rounded-lg'. ($errors->has('password') ? ' is-invalid' : null)])}}
                            @error('password')
                            <div class="fv-plugins-message-container">
                                <div class="fv-help-block">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            {{ Form::submit(__('buttons.sign_in'),['class' => 'btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3'])}}
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
