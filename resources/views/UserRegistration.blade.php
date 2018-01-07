@extends('layouts.app')
@section('content')	
{!! Form::open(['action' => 'UserController@store', 'class' => 'form-horizontal']) !!}
	<table class="modal-dialog modal-content table">
		<tr>
			<td>Lietotājvārds:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Parole:</td>
			<td><input type="password" name="password1" value="" style="display: none"><input type="password" name="password1"><span class="glyphicon glyphicon-question-sign"  data-toggle="tooltip" data-original-title="Vismaz 9 simboli, vismaz 1 lielais burts, vismaz 1 cipars, vismaz 1 specsimbols" style="padding-left: 5px"></span></td>
		</tr>
		<tr>
			<td>Apstiprināt paroli:</td>
			<td><input type="password" name="password2" value="" style="display: none"><input type="password" name="password2"></td>
		</tr>
		<tr>
			<td>Epasts:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Privilēģijas:</td>
			<td><select name="privileges">
				<option value="1">kontaktinformācija</option>
				<option value="2">tehniskā informācija</option>
				<option value="3">admin</option>
				</select>
			</td>
		</tr>
		<tr> 
			<td colspan="2" ><input type="submit" class="btn btn-success btn-block" name="submit" value="Reģistrēt"></td>
		</tr>
	</table>
{!! Form::close() !!}
@endsection