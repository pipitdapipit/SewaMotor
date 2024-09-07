@extends('layout.layout')

@section('title', 'Sewa Motor')
<link rel="stylesheet" href="css/update.css">

@section('content')

{{-- @if ($motors)

    @foreach ($motors as $m)
        {{ $m->name }}
        {{ $m->motorcycle }}
        {{ $m->model }}
        {{ $m->rental_time }}
        {{ $m->rental_price }}
        {{ $m->is_used}}
    @endforeach

@endif --}}

<div class="all_data">
    <h1>Rent Data</h1>
    <div class="wrapper">
        <form method="post" action='/update-rent'>
            @csrf

            <div class="wrap-input">
                <label for="id">ID: </label>
                <input type="text" name="id" id="id" class="input-field">
            </div>

            <div class="wrap-input">
                <label for="rental_time">Rental Time: </label>
                <input type="text" name="rental_time" id="rental_time" class="input-field">
            </div>

            <div class="wrap-input">
                <label for="returned">Returned: </label>
                <input type="checkbox" name="returned" id="returned" class="input-field">

            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    @if ($motors)


    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Motorcycle</th>
            <th>Model</th>
            <th>Rental Time</th>
            <th>Rental Price</th>
            <th>Returned</th>
        </tr>
            @foreach ($motors as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->name }}</td>
                <td>{{ $m->motorcycle }}</td>
                <td>{{ $m->model }}</td>
                <td>{{ $m->rental_time }}</td>
                <td>{{ $m->rental_price }}</td>
                <td>{{ $m->returned == 1 ? 'Yes' : 'No' }}</td>
            </tr>

            @endforeach
        @else
            <h5>There is no data</h5>
        @endif
    </table>
    <div class="page">
        <a href={{ $motors->url(1) }}>First Page</a>
        <a href={{ $motors->previousPageUrl() }}> Prev </a>
        <div class= "curr-page">{{ $motors->currentPage() }}</div>
        <a href={{ $motors->nextPageUrl() }}> Next </a>
        <a href={{ $motors->url($motors->lastPage()) }}> Last Page</a>
    </div>
</div>

@endsection
