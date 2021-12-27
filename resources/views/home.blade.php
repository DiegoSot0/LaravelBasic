@extends('layout')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
         
            <div class="col-12 col-lg-6">
                <h1 class="display-4 primary">Desarrollo Web</h1>
                <p class="lead text-secondary"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus temporibus earum recusandae, officiis illo doloremque officia tempore aperiam quibusdam. Dolore?</p>
                <a href="{{route('contact')}}" class="btn btn-lg btn-block btn-primary">Contáctame</a>
                <a href="{{route('projects.index')}}" class="btn btn-lg btn-block btn-outline-primary">Portafolio</a>

            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrrollo Web">
            </div>
        </div>
    </div>
@endsection
