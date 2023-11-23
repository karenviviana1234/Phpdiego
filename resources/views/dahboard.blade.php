@extends('layouts.app')

@section('titulo')
Hola desde dashborad
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
        <img class="md:w-6/12 " src="{{ asset('img/usuario___3965563667cdede___.svg') }}" alt="Imagen de usuario">
    </div>
        <div>
          <h1>Hola Karen</h1>
        </div>
</div>

  @endsection
