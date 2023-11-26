@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact Me</h1>
    <form action="/contact" method="post">
        @csrf
        <!-- Add form fields for name, email, message, etc. -->
        <button type="submit">Submit</button>
    </form>
@endsection
