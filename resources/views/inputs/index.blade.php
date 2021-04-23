@extends('layouts.template')

@section('section-main__title')
Gestionar entradas.
@endsection

@section('boton-add')
<div class="button-container__group">
    <a href="{{route('inputs.create')}}" class="button-container__button--succes">Agregar entrada</a>
</div>
@endsection

@section('content-section-main')
@foreach ($entradas as $entrada)
   <article class="section-main__articles">
    <h3 class="section-main__tile-article">{{$entrada->title}}</h3>

    <p class="section-main__description">{{$entrada->description}}</p>

    <div class="more-info">
        <cite class="more-info__cite"><span class="more-info__span">Categoria:</span>{{$entrada->category->name}}.</cite>
    </div>

    <div class="button-container">
        <div class="button-container__group button-container__group">
            <input class="button-container__button--info" type="submit" value="Modificar">
        </div>
        <div class="button-container__group">
            <input class="button-container__button--danger" type="submit" value="Eliminar">
        </div>
    </div>
</article> 
@endforeach


@endsection


