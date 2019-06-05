@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
@include('includes.login')
@endsection

@section('footer')
@include('includes.footer')
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  var sidenav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sidenav, {  });
});
</script>
@endsection
