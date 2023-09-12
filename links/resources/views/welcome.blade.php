@extends('layout.main')
@section('title', 'Home')

@section('content')

@if(Session::has('msg'))
<script>
    swal("Message", "{{ Session::get('msg') }}", 'success',{
        button:true,
        button:"OK!",
    });
</script>
@endif
@endsection
