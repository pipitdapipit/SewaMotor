@extends('layout.layout')

@section('title', 'Sewa Motor')
<link rel="stylesheet" href="css/datas.css">

@section('content')

<div class="all_data">
    <h1>Rent Data</h1>
    <div class="wrapper-atas">
        <a href= "/update-page" ><button type="submit" class="update-btn">Update</button></a>
        <div class="wrapper-dalem">
            <form method="GET" action="/data">
                @csrf
                    <input type="text" name="search" id="search" placeholder="Search Motorcycle..." class="search-field"/>
                    <button type="submit" class="search-btn">Search</button>
            </form>
        </div>
    </div>
    @if ($motors)
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Motorcycle</th>
            <th>Model</th>
            <th>Rental Time (days)</th>
            <th>Rental Price</th>
            <th>Returned</th>
            <th>Delete</th>
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
                <form method="POST" action="/delete-rent">
                    @csrf
                    <input type="hidden" value={{ $m->id }} name ="id" id="id">
                    <td><Button type="submit" class="delete-btn">Delete</Button></td>
                </form>
            </tr>
            @endforeach
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
