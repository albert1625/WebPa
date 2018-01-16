@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{!! action('WebsitesController@update', ['id' => 123]) !!}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('www') ? ' has-error' : '' }}">
                            <label for="www" class="col-md-4 control-label">WWW</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="www" value="" required autofocus>

                                @if ($errors->has('www'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('www') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
	                        <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
	                            <label for="name" class="col-md-2 control-label">Contact Name</label>

	                            <div class="col-md-4">
	                                <input id="name" type="text" class="form-control" name="name" value="">

	                                @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('phone') ? ' has-error' : '' }}">
	                            <label for="phone" class="col-md-2 control-label">Phone</label>

	                            <div class="col-md-4">
	                                <input id="phone" type="text" class="form-control" name="phone" value="">

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
	                            <label for="email" class="col-md-2 control-label">E-mail</label>

	                            <div class="col-md-4">
	                                <input id="email" type="email" class="form-control" name="email" value="">

	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('company') ? ' has-error' : '' }}">
	                            <label for="company" class="col-md-2 control-label">Company</label>

	                            <div class="col-md-4">
	                                <input id="company" type="text" class="form-control" name="company" value="">

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
	                                <input id="dns" type="text" class="form-control" name="dns" value="">

	                                @if ($errors->has('dns'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('dns') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('dbtype') ? ' has-error' : '' }}">
	                            <label for="dbtype" class="col-md-2 control-label">DB type</label>

	                            <div class="col-md-4">
	                                <input id="dbtype" type="text" class="form-control" name="dbtype" value="">

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
	                            <label for="dbname" class="col-md-2 control-label">DB name</label>

	                            <div class="col-md-4">
	                                <input id="dbname" type="text" class="form-control" name="dbname" value="">

	                                @if ($errors->has('dbname'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('dbname') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('dbusername') ? ' has-error' : '' }}">
	                            <label for="dbusername" class="col-md-2 control-label">DB username</label>

	                            <div class="col-md-4">
	                                <input id="dbusername" type="text" class="form-control" name="dbusername" value="">

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
	                            <label for="ipaddress" class="col-md-2 control-label">IP address</label>

	                            <div class="col-md-4">
	                                <input id="ipaddress" type="text" class="form-control" name="ipaddress" value="">

	                                @if ($errors->has('ipaddress'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('ipaddress') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="{{ $errors->has('servername') ? ' has-error' : '' }}">
	                            <label for="servername" class="col-md-2 control-label">Server name</label>

	                            <div class="col-md-4">
	                                <input id="servername" type="text" class="form-control" name="servername" value="">

	                                @if ($errors->has('servername'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('servername') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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

