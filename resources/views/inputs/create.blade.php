@extends('layouts.template')

@section('section-main__title')
    Crear entrada.
@endsection


@section('content-section-main')
    @section('boton-add')
        <a href="{{route('inputs.index')}}" class="button-container__button--info">Volver</a>
    @endsection
    <div class="form-group">
        <form class="form-inputs" action="{{route('inputs.store')}}" method="POST">
            @csrf
            <div class="input-container">
                <label class="input-container__label" for="title"> Titulo</label>
                <input id="title" name="title" class="input-container__input" type="text" placeholder="Titulo">
            </div>

            <div class="input-container">
                <label class="input-container__label" for="description"> Descripcion</label>
                <textarea class="input-container__text" name="description" id="description"></textarea>
            </div>

            <div class="input-container">
                <label class="input-container__label" for="category"> Categoria</label>
                <select class="input-container__select" name="category_id" id="category">
                    <option value="" selected>Selecione una categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="button-container__group">
                <input class="button-container__button--succes" type="submit" value="Agregar">
            </div>

    </form>
</div>
@endsection


