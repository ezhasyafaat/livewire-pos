<div class="content">
	<div class="block">
		<div class="block-header block-header-default">
 			<h3 class="block-title">{{ __('Data Product') }}</h3>
			<button wire:click="create()" class="btn btn-alt-success">Add Product</button>

			@if($isModal)
				<script>
					$(document).ready(function(){
						$("#modal-create-product").modal("show");
					});
				</script>
				@include('livewire.product.create')
			@endif
		</div>
		<div class="block-content block-content-full">
			@if(count($products))	
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th>Code</th>
						<th>Name</th>
						<th>Stock</th>
						<th>Unit</th>
						<th>Outprice</th>
						<th>Inprice</th>
						<th>Image</th>
						<th>Supplier</th>
						<th>Uploaded by</th>
						<th>Updated by</th>
						<th>Created at</th>
						<th>Updated at</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->code }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->stock }}</td>
							<td>{{ $product->unit }}</td>
							<td>{{ $product->outprice }}</td>
							<td>{{ $product->inprice }}</td>
							<td><img src="{{ asset($product->image) }}" alt=""></td>
							<td>{{ $product->supplier }}</td>
							<td>{{ $product->uploaded_by }}</td>
							<td>{{ $product->updated_by }}</td>
							<td>{{ $product->created_at }}</td>
							<td>{{ $product->updated_at }}</td>
							<td>
								<button wire:click="edit({{ $product->id }})" class="btn btn-sm btn-warning"><i class="si si-pencil"></i></button>
								<button wire:click="destroy({{ $product->id }})" class="btn btn-sm btn-danger"><i class="si si-trash"></i></a></button>
								<button class="btn btn-sm btn-primary"><i class="si si-eye"></i></a></button>
							</td>
						</tr>
					@endforeach	
				</tbody>
			</table>
			@else
				<div class="alert alert-warning">
					<p class="mb-0">{{ __('No Data Available') }}</p>
				</div>
			@endif
			{{ $products->links('vendor.livewire.bootstrap') }}
		</div>
	</div>
</div>
