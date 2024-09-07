@extends('layout.layout')

@section('title', 'Sewa Motor')
<link rel="stylesheet" href="css/dashboard.css">

@section('content')

<div class="home">
    <div class="home-content">
        <h1>Ready to Ride? Rent Your Perfect Motorcycle Today!</h1>
        <p>Looking for the thrill of the open road or a convenient way to explore the city? Our motorcycle rental service has you covered! Choose from a wide range of bikes whether you're after a sleek sportbike, a comfortable cruiser, or a nimble scooter, we've got the perfect ride for you.</p>
        <div class="btn-box">
            <a href="/rent">Get Started</a>
        </div>
    </div>
</div>

<div class="model-text">
    <h1>Model</h1>
</div>

<div class="model">
    <div class="model-wrapper">
        <img src="img/honda-beat.png">
        <div class="content">
            <h2>Honda Beat</h2>
            <h1>Rp. 50.000/<span>day</span></h1>
            <div class="content-des">
                <p>Fuel: </p>
                <p>Gasoline</p>
            </div>
            <div class="content-des">
                <p>Seat: </p>
                <p>2</p>
            </div>
            <div class="content-des">
                <p>Transmition: </p>
                <p>Matic</p>
            </div>
        </div>
        <a href="/rent"><button type="submit" class="btn">Rent</button></a>
    </div>

    <div class="model-wrapper">
        <img src="img/yamaha-nmax.png" class="yamaha">
        <div class="content">
            <h2>Yamaha N-Max</h2>
            <h1>Rp. 50.000/<span>day</span></h1>
            <div class="content-des">
                <p>Fuel: </p>
                <p>Gasoline</p>
            </div>
            <div class="content-des">
                <p>Seat: </p>
                <p>2</p>
            </div>
            <div class="content-des">
                <p>Transmition: </p>
                <p>Matic</p>
            </div>
        </div>
        <a href="/rent"><button type="submit" class="btn">Rent</button></a>
    </div>

    <div class="model-wrapper">
        <img src="img/honda-vario.png" class="vario">
        <div class="content">
            <h2>Honda Vario</h2>
            <h1>Rp. 50.000/<span>day</span></h1>
            <div class="content-des">
                <p>Fuel: </p>
                <p>Gasoline</p>
            </div>
            <div class="content-des">
                <p>Seat: </p>
                <p>2</p>
            </div>
            <div class="content-des">
                <p>Transmition: </p>
                <p>Matic</p>
            </div>
        </div>
        <a href="/rent"><button type="submit" class="btn">Rent</button></a>
    </div>
</div>

@endsection
