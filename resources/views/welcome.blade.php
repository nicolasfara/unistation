@extends('layouts.layout')

@section('content')

<div class="ciao"> Lorem Impsum</div>
@endsection

@push('styles')
    <link href="{{ asset('css/app.css', Request::secure()) }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/app.js', Request::secure()) }}"></script>
@endpush

