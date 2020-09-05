@extends('front.layouts.master')
@section('title')
FBÜ-Blog
@endsection
@section('content')

      <div class="col-lg-9 col-md-10 mx-auto">
        
        @include('front.widgets.articleList')
        <!-- Pager -->

      </div>
      @include('front.widgets.categoryWidget') <!-- Category yi bir widget haline getirdim  -->

  <hr>

  @endsection
