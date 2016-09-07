@extends('layouts.appLogin')

@section('content')

<div class="content">
            <!-- BEGIN LOGO -->
            <div class="logo2" >
                <h4>ระบบบริหารจัดการสินทรัพย์</h4>
            </div>

                <!-- END LOGO -->
                <!-- BEGIN LOGIN FORM -->
                <form action="{{ url('/login') }}" class="login-form" method="POST" role="form">
                    {{ csrf_field() }}
                    <h5 class="form-title">
                        เข้าสู่ระบบ
                    </h5>
                    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                        <label class="control-label visible-ie8 visible-ie9">
                            ชื่อสมาชิก
                        </label>
                        <div class="input-icon">
                            <i class="fa fa-user">
                            </i>
                            <input autocomplete="off" class="form-control placeholder-no-fix" id="username" name="username" placeholder="ชื่อสมาชิก" type="text" value="{{ old('username') }}"/>
                            @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('username') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label visible-ie8 visible-ie9">
                            Password
                        </label>
                        <div class="input-icon">
                            <i class="fa fa-lock">
                            </i>
                            <input autocomplete="off" class="form-control placeholder-no-fix" id="password" name="password" placeholder="รหัสผ่าน" type="password"/>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('password') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-actions">

                        <button class="btn green btn-block" type="submit">
                            <i class="fa fa-btn fa-sign-in">
                                </i>
                                เข้าสู่ระบบ
                        </button>
                    </div>


                </form>
                <!-- END LOGIN FORM -->
            </br>
        </div>

@endsection
