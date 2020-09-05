@extends('front.layouts.master')
@section('title',$category->name)


@section('content')
      
      <div class="col-lg-9 mx-auto">
        
        @include('front.widgets.articleList')
        

      </div>
      
      @include('front.widgets.categoryWidget')   
      


  @endsection
