@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('websites.createNew')</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{!! action('WebsitesController@store') !!}">
                        {{ csrf_field() }}

                        <div>
                        	<div class="form-group">
		                        <div class="{{ $errors->has('www') ? ' has-error' : '' }}">
		                            <label for="www" class="col-md-2 control-label">WWW</label>

		                            <div class="col-md-4">
		                                <input id="name" type="text" class="form-control" name="www" value="{{ old('www') }}" required autofocus>

		                                @if ($errors->has('www'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('www') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="{{ $errors->has('status') ? ' has-error' : '' }}">
		                            <label for="status" class="col-md-2 control-label">@lang('websites.status')</label>

		                            <div class="col-md-4">
		                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">

		                                @if ($errors->has('status'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('status') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                    </div>
                    	</div>

                        <hr>

                        <div class="form-group">
	                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
	                            <label for="name" class="col-md-2 control-label">@lang('websites.contactName')</label>

	                            <div class="col-md-4">
	                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

	                                @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('phone') ? ' has-error' : '' }}">
	                            <label for="phone" class="col-md-2 control-label">@lang('websites.phone')</label>

	                            <div class="col-md-4">
	                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

	                                @if ($errors->has('phone'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('phone') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                    </div>

                        <div class="form-group">
	                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
	                            <label for="email" class="col-md-2 control-label">@lang('websites.email')</label>

	                            <div class="col-md-4">
	                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('company') ? ' has-error' : '' }}">
	                            <label for="company" class="col-md-2 control-label">@lang('websites.company')</label>

	                            <div class="col-md-4">
	                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}">

	                                @if ($errors->has('company'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('company') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                    </div>

						<hr>

                        <div class="form-group">
	                        <div class="{{ $errors->has('dns') ? ' has-error' : '' }}">
	                            <label for="dns" class="col-md-2 control-label">DNS</label>

	                            <div class="col-md-4">
	                                <input id="dns" type="text" class="form-control" name="dns" value="{{ old('dns') }}">

	                                @if ($errors->has('dns'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('dns') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('dbtype') ? ' has-error' : '' }}">
	                            <label for="dbtype" class="col-md-2 control-label">@lang('websites.dbType')</label>

	                            <div class="col-md-4">
	                                <input id="dbtype" type="text" class="form-control" name="dbtype" value="{{ old('dbtype') }}">

	                                @if ($errors->has('dbtype'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('dbtype') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                    </div>

                        <div class="form-group">
	                        <div class="{{ $errors->has('dbname') ? ' has-error' : '' }}">
	                            <label for="dbname" class="col-md-2 control-label">@lang('websites.dbName')</label>

	                            <div class="col-md-4">
	                                <input id="dbname" type="text" class="form-control" name="dbname" value="{{ old('dbname') }}">

	                                @if ($errors->has('dbname'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('dbname') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('dbusername') ? ' has-error' : '' }}">
	                            <label for="dbusername" class="col-md-2 control-label">@lang('websites.dbUsername')</label>

	                            <div class="col-md-4">
	                                <input id="dbusername" type="text" class="form-control" name="dbusername" value="{{ old('dbusername') }}">

	                                @if ($errors->has('dbusername'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('dbusername') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                    </div>

                        <div class="form-group">
	                        <div class="{{ $errors->has('ipaddress') ? ' has-error' : '' }}">
	                            <label for="ipaddress" class="col-md-2 control-label">@lang('websites.ipAddress')</label>

	                            <div class="col-md-4">
	                                <input id="ipaddress" type="text" class="form-control" name="ipaddress" value="{{ old('ipaddress') }}">

	                                @if ($errors->has('ipaddress'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('ipaddress') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('servername') ? ' has-error' : '' }}">
	                            <label for="servername" class="col-md-2 control-label">@lang('websites.serverName')</label>

	                            <div class="col-md-4">
	                                <input id="servername" type="text" class="form-control" name="servername" value="{{ old('servername') }}">

	                                @if ($errors->has('servername'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('servername') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                    </div>

	                    <hr>

                        <div class="form-group {{ $errors->has('owner') ? ' has-error' : '' }}">
                            <label for="owner" class="col-md-4 control-label">@lang('websites.ownerEmail')</label>

                            <div class="col-md-6">
                                <input id="owner" type="text" class="form-control" name="owner" value="{{ old('owner') }}">

                                @if ($errors->has('owner'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('owner') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-success">
                                    @lang('websites.create')
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

