@extends('layouts.app')
@section('content')

<div class="myTable>">
	<div style='float: right'>Search: <input id='filter' type='text'><br><br></div>
	<table class="footable table" data-page-navigation=".pagination" data-page-size="10" data-filter=#filter>
		<thead>
			<tr>
				@if (Auth::user()->privileges==1 || Auth::user()->privileges==2)
				<th data-sort-ignore='true'></th>
				@endif
				<th>WWW</th>
				@if ($privileges->view_technical)
				<th data-hide='all'>DNS</th>
				@endif
				@if ($privileges->view_contact)
				<th data-hide='phone'>Contact Name</th>
				<th data-hide='phone'>Phone</th>
				<th data-hide='phone'>E-mail</th>
				<th data-hide='all'>Company</th>
				@endif
				@if ($privileges->view_technical)
				<th data-hide='phone'>DB type</th>
				<th data-hide='phone'>DB name</th>
				<th data-hide='all'>DB username</th>
				<th data-hide='phone'>IP address</th>
				<th  data-hide='all'>Server Name</th>
				@endif
				@if ($privileges->view_general)
				<th>Status</th>
				<th data-hide='phone'>Owner username</th>
				<th data-hide='all'>Owner E-mail</th>
				@endif
				@if (Auth::user()->privileges==2)
				<th data-sort-ignore='true'></th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach ( $websites as $ws )
			<tr>
				@if (Auth::user()->privileges==1 || Auth::user()->privileges==2)
				<td width='100px'><a href="websites/{{$ws['id']}}/edit" class='btn btn-default ' style='color:orange'><span class="glyphicon glyphicon-pencil"></span></a></td>
				@endif
				<td>{{ $ws->www }}</td>
				@if ($privileges->view_technical)
				<td>{{ $ws->dns }}</td>
				@endif
				@if ($privileges->view_contact)
				<td>{{ $ws->contact_name }}</td>
				<td>{{ $ws->phone }}</td>
				<td>{{ $ws->email }}</td>
				<td>{{ $ws->company }}</td>
				@endif
				@if ($privileges->view_technical)
				<td>{{ $ws->database_type }}</td>
				<td>{{ $ws->database_name }}</td>
				<td >{{ $ws->database_user }}</td>
				<td>{{ $ws->ip_address }}</td>
				<td>{{ $ws->server_name }}</td>
				@endif
				@if ($privileges->view_general)
				<td>{{ $ws->status }}</td>
				<td>{{ $ws->user['name'] }}</td>
				<td>{{ $ws->user['email'] }}</td>
				@endif
				@if (Auth::user()->privileges==2)
				<td width='60px'>
					<form id="form-delete" method="POST" action="websites/{{$ws['id']}}">
                    	{{ method_field('DELETE') }}
                        {{ csrf_field() }}
						<button data-toggle="confirmation" type="submit" class='btn btn-default data-delete' style='color:red'>
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					</form>
				</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
		{{ $websites }}
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