@extends('admin.layouts.app')

@section('content')

    <div class="p-3">
        <div class="row">
            <div class="col-8 col-md-10 col-lg-11">
                <div class="mr-auto">
                    <h3>Categorias :: Editar</h3>
                </div>
            </div>
            <div class="col-4 col-md-2 col-lg-1">
                <a href="{{ route('back') }}" class="btn btn-block btn-outline-danger" data-toggle="tooltip" data-placement="left" title="Voltar">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-10">
                {{ Form::model($categoria, ['route' => ['admin.categorias.update', $categoria->id], 'method' => 'PUT','id' => 'form-crud']) }}
                @include('admin.categorias.partials.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
