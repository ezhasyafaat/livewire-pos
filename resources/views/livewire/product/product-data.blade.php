<div class="content">
	<div class="block">
		<div class="block-header block-header-default">
 			<h3 class="block-title">{{ __('Data Admin') }}</h3>
			<button wire:click="create()" class="btn btn-alt-success">Add Admin</button>
		</div>
		<div class="block-content block-content-full">
			@if(count($products))	
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->created_at }}</td>
							<td>{{ $user->updated_at }}</td>
							<td>
								<button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-warning"><i class="si si-pencil"></i></button>
								<button wire:click="destroy({{ $user->id }})" class="btn btn-sm btn-danger"><i class="si si-trash"></i></a></button>
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
			{{ $users->links('vendor.livewire.bootstrap') }}
		</div>
	</div>
</div>
