@extends('bootstrap-toast::toast')

@section('class', $toast->type)
@section('delay', '10000')
@section('icon')
<i class="fas fa-check-circle"></i>
@endsection