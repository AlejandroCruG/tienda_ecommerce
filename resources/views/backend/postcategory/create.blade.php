@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Añadir Categoria Post</h5>
    <div class="card-body">
      <form method="post" action="{{route('post-category.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Titulo</label>
          <input id="inputTitle" type="text" name="title" placeholder="Escriba el titulo"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Estado</label>
          <select name="status" class="form-control">
              <option value="active">Activo</option>
              <option value="inactive">Inactivo</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reiniciar</button>
           <button class="btn btn-success" type="submit">Confirmar</button>
        </div>
      </form>
    </div>
</div>

@endsection
