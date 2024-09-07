@extends('layout.layout')

@section('title', 'Sewa Motor')
<link rel="stylesheet" href="css/rent.css">

@section('content')

<div class="wrap-1">
    <h1>Input Data</h1>
    <div class="wrap-2">
        <form method="POST" action="/rent">
            @csrf

            <label for="name">Name: </label>
            <input type="text" name="name" id="name" class="input-field">

            <label for="motorcycle">Motorcycle: </label>
            <input type="text" name="motorcycle" id="motorcycle" class="input-field">

            <label for="model">Model: </label>
            <input type="text" name="model" id="model" class="input-field">

            <label for="rental_time">Rent Time (days): </label>
            <input type="number" name="rental_time" id="rental_time" class="input-field">


            <button type="submit" class="btn">Submit</button>
        </form>
        @if ($errors->any())
        <div>
            <p>{{ $errors->first('Input') }}</p>
        </div>
        @endif
    </div>
</div>

@endsection
