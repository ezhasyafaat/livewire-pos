@extends('_layouts.app')

@section('title_page')
Product - {{ config('app.name') }}
@endsection

@section('content')
		@livewire('product.product-data');
@endsection
