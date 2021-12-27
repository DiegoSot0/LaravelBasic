@extends('layout')
@section('title','About')
@section('content')
<div class="container">
        <div class="row">
        <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/about.svg" alt="Desarrrollo Web">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 primary">Quién soy</h1>
                <p class="lead text-secondary"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis natus quam, voluptates mollitia minus, fugiat ut impedit vitae cum cumque eligendi temporibus aliquid deleniti laborum doloremque corporis fuga quod ipsam ab reiciendis exercitationem pariatur. Tempore iste, itaque, blanditiis dolorem incidunt, accusamus accusantium labore soluta impedit nisi modi adipisci. Maxime, tempore!</p>
                <a href="{{route('contact')}}" class="btn btn-lg btn-block btn-primary">Contáctame</a>
                <a href="{{route('projects.index')}}" class="btn btn-lg btn-block btn-outline-primary">Portafolio</a>

            </div>
            
        </div>
    </div>
@endsection