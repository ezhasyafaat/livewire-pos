@extends('_layouts.app')

@section('title_page')
Admin - {{ config('app.name') }}
@endsection

@section('content')
		@livewire('admin.admin-data')
@endsection
