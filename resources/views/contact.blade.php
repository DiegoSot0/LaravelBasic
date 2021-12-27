@extends('layout')
@section('title', 'Contact')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto ">


            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                @csrf
                <!--Para evitar ataques-->
                <h1 class="display-4">{{ __('Contact') }}</h1>
                <hr>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light @error('name') is-invalid @else border-0 @enderror shadow-sm" name="name" placeholder="Escribe aquí tu nombre" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input class="form-control bg-light @error('email') is-invalid @else border-0 @enderror shadow-sm " type="text" name="email" placeholder="Escribe aquí tu e-mail" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light @error('subject') is-invalid @else border-0 @enderror shadow-sm " name="subject" placeholder="Escribe aquí el asunto de tu mensaje" value="{{ old('subject') }}">
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control bg-light @error('content') is-invalid @else border-0 @enderror shadow-sm " name="content" id="" placeholder="Escribe aquí el contendio de tu mensaje">{{ old('content') }}</textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>
                <button class="btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>

</div>
@endsection