@extends('_layouts.app')

@section('title_page')
Dashboard - {{ config('app.name') }}
@endsection

@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ __('Dashboard') }}</h3>
        </div>
        <div class="block-content">
           @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <p>{{ __('You are logged in!') }}</p>
        </div>
    </div>
</div>
@endsection
