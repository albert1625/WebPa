@extends('layouts.app')
@section('content')

@if (Auth::user()->isAdmin())
<div class="myTable" style="max-width: 700px; margin: auto;">
	<div style='float: right'>@lang('users.search'): <input id='filter' type='text'><br><br></div>
	<table class="footable table" data-page-navigation=".pagination" data-page-size="10" data-filter=#filter>
		<thead>
			<tr>
				<th data-sort-ignore='true'></th>
				<th>@lang('users.username')</th>
				<th data-hide='phone'>@lang('users.email')</th>
				<th data-hide='phone'>@lang('users.privileges')</th>
				<th data-hide='all'>@lang('users.view')</th>
				<th data-hide='all'>@lang('users.edit')</th>
			</tr>
		</thead>
		<tbody>
			@foreach ( $users as $user )
			<tr>
				<td width='100px'><a href="users/{{$user['id']}}/edit" title="@lang('users.edit')" class='btn btn-default ' style='color:orange'><span class="glyphicon glyphicon-pencil"></span></a></td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if ($user->privileges == 0)
					    @lang('auth.user')
					@elseif ($user->privileges == 1)
					    @lang('auth.moderator')
					@elseif ($user->privileges == 2)
					    @lang('auth.administrator')
					@endif
				</td>
				<td>
					@if ($user->privileges==1)					
						<input type="checkbox" name="view_general" disabled="disabled" @if ($user->privilege['view_general']) checked @endif> @lang('auth.general')
						<input type="checkbox" name="view_contact" disabled="disabled" @if ($user->privilege['view_contact']) checked @endif> @lang('auth.contact')
						<input type="checkbox" name="view_technical" disabled="disabled" @if ($user->privilege['view_technical']) checked @endif> @lang('auth.technical')
					@endif
				</td>
				<td>
					@if ($user->privileges==1)					
						<input type="checkbox" name="edit_general" disabled="disabled" @if ($user->privilege['edit_general']) checked @endif> @lang('auth.general')
						<input type="checkbox" name="edit_contact" disabled="disabled" @if ($user->privilege['edit_contact']) checked @endif> @lang('auth.contact')
						<input type="checkbox" name="edit_technical" disabled="disabled" @if ($user->privilege['edit_technical']) checked @endif> @lang('auth.technical')
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="websites/create" type="button" class="btn btn-primary">
	    @lang('users.registerNew')
	</a>
</div>

@endif

@endsection


@section('scripts')

<script>
$(function () {
  $('.data-delete').on('click', function (e) {
    if (confirm('Are you sure you want to delete?')) return;
    e.preventDefault();
    $('#form-delete' + $(this).data('form')).submit();
  });
});
</script>

<script>
	$(function () {
		$('.footable').footable({
		    breakpoints: {
		        tiny: 100,
		        medium: 555,
		        big: 2048
			}
    	});
	});
</script>


@endsection