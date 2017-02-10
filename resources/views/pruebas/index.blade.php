
@extends('layouts.principal')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Categorias de Noticias</div>
                <div class="panel-body">
                    @if(isset($edit))
                        @include('pruebas.edit')
                    @else
                        @include('pruebas.create')
                        @include('pruebas.table')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
