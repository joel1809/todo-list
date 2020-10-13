@extends('layouts.app')
   @section('content')
   <div class="container">
     <div class="row justify-content-center">
        <div class="col-xs">
            <a name="" id="" class="btn btn-primary m-4" href="{{route('todos.create')}}" role="button">Ajouter une Todo </a>   
        </div>
      @if (Route::currentRouteName() == 'todos.index' )  
        <div class="col-xs">
            <a name="" id="" class="btn btn-warning m-4" href="{{route('todos.undone')}}" role="button">Voir les Todo ouverts</a>   
        </div>
        <div class="col-xs">
            <a name="" id="" class="btn btn-success m-4" href="{{route('todos.done')}}" role="button">Voir les Todo Terminées</a> 
      @elseif ( Route::currentRouteName() == 'todos.done' )
            <div class="col-xs">
            <a name="" id="" class="btn btn-dark m-4" href="{{route('todos.index')}}" role="button">Voir toutes les Todo</a>   
        </div>
        <div class="col-xs">
            <a name="" id="" class="btn btn-warning m-4" href="{{route('todos.undone')}}" role="button">Voir les Todo ouverts</a> 
      @elseif ( Route::currentRouteName() == 'todos.undone' )  
              <div class="col-xs">
            <a name="" id="" class="btn btn-dark m-4" href="{{route('todos.index')}}" role="button">Voir toutes les Todo</a>   
        </div>
        <div class="col-xs">
            <a name="" id="" class="btn btn-success m-4" href="{{route('todos.done')}}" role="button">Voir les Todo Terminées</a>  
      @endif                 
        </div>
     </div>
   </div>
     @foreach ($datas as $data )
     <div class="alert alert-primary" role="alert">
          <strong>{{ $data->name }} @if($data->done)<span class="badge badge-success">done</span>@endif</strong>
     </div>
	 @endforeach 
      {{ $datas->links() }}
   @endsection