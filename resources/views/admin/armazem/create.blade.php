@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">

    <div class="card-header">
        <h4>Adicionar Armazem <a href="{{url('admin/armazem')}}" class="btn btn-primary btn-sm text-white float-end">Voltar</a>

    </h4>


    </div>

    <div class="card-body">
                <form action="{{url('admin/armazem')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>
                            Nome
                        </label>
                        <input type="text" name="nome" class="form-control" />
                       @error('nome')
                        <small class="text-danger">{{$message}}</small>
                       @enderror

                    </div>

                    <div class="col-md-6 mb-3">
                        <label>
                            Localizacao
                        </label>
                        <input type="text" name="localizacao" class="form-control" />
                        @error('localizacao')
                        <small class="text-danger">{{$message}}</small>
                       @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>
                            Capacidade
                        </label>
                        <input type="text" name="capacidade" class="form-control" />
                       
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>
                            Largura
                        </label>
                        <input type="text" name="largura" class="form-control" />

                    </div>
                    <div class="col-md-6 mb-3">
                        <label>
                            Altura
                        </label>
                        <input type="text" name="altura" class="form-control" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>
                            Descricao
                        </label>
                        <textarea name="descricao" class="form-control" rows="=3" ></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>
                            Status
                        </label> <br>
                        <input type="checkbox" name="status" />
                    </div>

                    <div class="col-md-6 mb-3">
                       <button type="submit" class="btn btn-primary float-end">
                            Save
                       </button>
                    </div>


                    </div>
                </form>

            </div>
    </div>

  </div>
</div>
@endsection
