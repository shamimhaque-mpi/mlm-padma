@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">My Order</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">My Order</li>
        </ol>

        <div class="table-responsive">
        	<table class="table table-bordered">
        		<thead>
        			<tr>
        				<th>SL</th>
        				<th>Date</th>
        				<th>Voucher</th>
        				<th>Amount</th>
        				<th>Status</th>
        				<th>Action</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>1</td>
        				<td>2020-09-13</td>
        				<td>326541</td>
        				<td>2500TK</td>
        				<td>Pending</td>
        				<td width="150">
        					<a href="#" class="btn btn-sm btn-info" title="View Voucher"><i class="fa fa-eye"></i></a>
        					<a href="#" class="btn btn-sm btn-danger" title="Order Cencel"><i class="fa fa-trash"></i></a>
        				</td>
        			</tr>
        		</tbody>
        	</table>
        </div>
    </div>
@endsection

@push('styles')

@endpush

@push('scripts')

@endpush
