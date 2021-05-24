@extends('layouts.main')
@section('content')
<section class="services" id="app">
    <servicesitem-component></servicesitem-component>
</section>
@endsection
@section('scripts')
    <link rel="stylesheet" href="{{ asset("css/services.css") }}">      
    <script src="{{ asset("js/app.js") }}"></script>    
@endsection