@extends('layout')



@section('dash')



<h4 class="text-center">this is dash</h4>

My name is: {{ Auth::user()->name }}

@endsection
