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
<article class="section-main__articles">
    <h3 class="section-main__tile-article">Titulo del Articulo</h3>

    <p class="section-main__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, aperiam voluptatum. Porro incidunt provident ratione ad. Repellendus molestias quia quis beatae facere ducimus maiores numquam, corrupti, officia quae ratione consequuntur!</p>

    <div class="more-info">
        <cite class="more-info__cite"><span class="more-info__span">Autor:</span>  Fulanito de tal.</cite>
        <cite class="more-info__cite"><span class="more-info__span">Categoria:</span>  Fulanito de tal.</cite>
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

<article class="section-main__articles">
    <h3 class="section-main__tile-article">Titulo del Articulo</h3>

    <p class="section-main__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, aperiam voluptatum. Porro incidunt provident ratione ad. Repellendus molestias quia quis beatae facere ducimus maiores numquam, corrupti, officia quae ratione consequuntur!</p>

    <div class="more-info">
        <cite class="more-info__cite"><span class="more-info__span">Autor:</span>  Fulanito de tal.</cite>
        <cite class="more-info__cite"><span class="more-info__span">Categoria:</span>  Fulanito de tal.</cite>
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

<article class="section-main__articles">
    <h3 class="section-main__tile-article">Titulo del Articulo</h3>

    <p class="section-main__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, aperiam voluptatum. Porro incidunt provident ratione ad. Repellendus molestias quia quis beatae facere ducimus maiores numquam, corrupti, officia quae ratione consequuntur!</p>

    <div class="more-info">
        <cite class="more-info__cite"><span class="more-info__span">Autor:</span>  Fulanito de tal.</cite>
        <cite class="more-info__cite"><span class="more-info__span">Categoria:</span>  Fulanito de tal.</cite>
    </div>

    <div class="button-container">
        <div class="button-container__group">
            <input class="button-container__button--info" type="submit" value="Modificar">
        </div>
        <div class="button-container__group">
            <input class="button-container__button--danger" type="submit" value="Eliminar">
        </div>
    </div>
</article>
@endsection
