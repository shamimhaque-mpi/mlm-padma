@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">My Order</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">My Wish List</li>
        </ol>

        <div class="table-responsive">
        	<table class="table table-bordered">
        		<thead>
        			<tr>
        				<th>SL</th>
        				<th>Name</th>
        				<th>Price</th>
        				<th>Min-Sale QTY</th>
        				<th>Stock</th>
        				<th>Status</th>
        				<th>Action</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>1</td>
        				<td>This is Demo Product</td>
        				<td>500TK</td>
        				<td>2 pcs</td>
        				<td>10 pcs</td>
        				<td>Available</td>
        				<td width="150">
        					<a href="#" class="btn btn-sm btn-info" title="View Details"><i class="fa fa-eye"></i></a>
        					<a href="#" class="btn btn-sm btn-success" title="Add To Cart"><i class="fa fa-cart-plus"></i></a>
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
