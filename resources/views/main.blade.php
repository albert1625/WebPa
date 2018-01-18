@extends('layouts.app')
@section('content')

<div class="myTable">
	<div style='float: right'>@lang('websites.search'): <input id='filter' type='text'><br><br></div>
	<table class="footable table" data-page-navigation=".pagination" data-page-size="5" data-filter=#filter>
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
				<th data-hide='phone'>@lang('websites.contactName')</th>
				<th data-hide='phone'>@lang('websites.phone')</th>
				<th data-hide='phone'>@lang('websites.email')</th>
				<th data-hide='all'>@lang('websites.company')</th>
				@endif
				@if ($privileges->view_technical)
				<th data-hide='all'>@lang('websites.dbType')</th>
				<th data-hide='phone'>@lang('websites.dbName')</th>
				<th data-hide='all'>@lang('websites.dbUsername')</th>
				<th data-hide='phone'>@lang('websites.ipAddress')</th>
				<th  data-hide='all'>@lang('websites.serverName')</th>
				@endif
				@if ($privileges->view_general)
				<th>@lang('websites.status')</th>
				<th data-hide='phone'>@lang('websites.ownerName')</th>
				<th data-hide='all'>@lang('websites.ownerEmail')</th>
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
				<td width='100px'><a href="websites/{{$ws['id']}}/edit" title="@lang('websites.edit')" class='btn btn-default ' style='color:orange'><span class="glyphicon glyphicon-pencil"></span></a></td>
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
						<button type="submit" title="@lang('websites.delete')" class='btn btn-default data-delete' style='color:red'>
							<span class="glyphicon glyphicon-remove"></span>
						</button>
					</form>
				</td>
				@endif
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="17">
					<div class="paging" style="float: right"> <ul class="pagination"></ul> </div>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

@if (Auth::user()->isAdmin())
<a href="websites/create" type="button" class="btn btn-success">
    @lang('websites.createNew')
</a>
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