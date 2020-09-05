@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')
    
        <div class="col-lg-8 col-md-9 mx-auto">

          {!!$article->content!!}
          <span class="text-danger">Okunma sayısı : <b>{{$article->hit}}</b></span>
        </div>

@include('front.widgets.categoryWidget') <!-- Category yi bir widget haline getirdim  -->
@endsection
