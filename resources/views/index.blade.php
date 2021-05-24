@extends('layouts.main')
@section('content')
<div class="wrapper-fluid" id="app">
    <index-component></index-component>
</div>

@endsection
@section('scripts')    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset("js/bootstrap.js") }}"></script>          
    <script src="{{ asset("js/app.js") }}"></script>
      
@endsection