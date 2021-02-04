<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ __('Data Admin') }}</h3>
        </div>
        <div class="block-content block-content-full">
        	<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell">Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($users as $user)
                	<tr>
                		<td>{{ $user->id }}</td>
                		<td>{{ $user->name }}</td>
                		<td>{{ $user->email }}</td>
                		<td>
                			<a href="" class="btn btn-sm btn-danger">Delete</a>
                		</td>
                	</tr>
                	@endforeach
                </tbody>
            </table>

            {{ $users->links('vendor.livewire.bootstrap') }}
        </div>
    </div>
</div>
