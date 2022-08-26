@extends('plantilla')

@section('titulo','Inicio')


@section('header')
@endsection


@section('contenido')

<div class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('img/slider/kevin1.jpeg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{url('img/slider/kevin2.jpeg')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{url('img/logo.png')}}" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>


@endsection


@section('scripts')

@endsection

@section('footer')

@endsection
