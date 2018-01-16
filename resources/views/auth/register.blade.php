@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('auth.register')</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">@lang('auth.name')</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">@lang('auth.email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">@lang('auth.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">@lang('auth.confirmPassword')</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="privileges" class="col-md-4 control-label">@lang('auth.privileges')</label>
                            <div class="col-md-6">
                                <select id="privileges" type="privileges" class="form-control" name="privileges">
                                    <option value="0">@lang('auth.user')</option>
                                    <option value="1">@lang('auth.moderator')</option>
                                    <option value="2">@lang('auth.administrator')</option>
                                </select> 
                            </div>
                        </div>

                        <div id="privileges2" class="form-group">
                            <label for="" class="col-md-4 control-label">@lang('auth.view')</label>
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" name="view_general" value="0">
                                        <input type="checkbox" name="view_general" value="1"> @lang('auth.general')
                                    </label>
                                    <label>
                                        <input type="hidden" name="view_contact" value="0">
                                        <input type="checkbox" name="view_contact" value="1"> @lang('auth.contact')
                                    </label>
                                    <label>
                                        <input type="hidden" name="view_technical" value="0">
                                        <input type="checkbox" name="view_technical" value="1"> @lang('auth.technical')
                                    </label>
                                </div>
                            </div>
                            <label for="" class="col-md-4 control-label">@lang('auth.edit')</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" name="edit_general" value="0">
                                        <input type="checkbox" name="edit_general" value="1"> @lang('auth.general')
                                    </label>
                                    <label>
                                        <input type="hidden" name="edit_contact" value="0">
                                        <input type="checkbox" name="edit_contact" value="1"> @lang('auth.contact')
                                    </label>
                                    <label>
                                        <input type="hidden" name="edit_technical" value="0">
                                        <input type="checkbox" name="edit_technical" value="1"> @lang('auth.technical')
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('auth.register')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>

$(document).ready(function () { 
    function showHide(){
        pr = document.getElementById("privileges").value;
        console.log(pr);
        if (pr==1)
            $("#privileges2").show();
        else
            $("#privileges2").hide();
    };
    showHide();

    $( "#privileges" ).change(function() {
        showHide();
    });
});
</script>
@endsection