@extends('front.layouts.master')
@section('title','İletişim Sayfası')
@section('bg','https://startbootstrap.github.io/startbootstrap-clean-blog/img/contact-bg.jpg')
@section('content')
    
        <div class="col-md-8">
          @if(session('success'))
          <div class="alert alert-danger" role="alert">
            {{session('success')}}
          </div>
          @endif
        <p>Bizimle İletişime Geçebilirsiniz</p>
        
        <form method="post" action = "{{route('contact.post')}}">
          @csrf
          <div class="control-group">
            <div class="form-group ">
              <label>Ad Soyad</label>
              <input type="text" class="form-control" placeholder="Ad Soyad" name="name" required >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group  ">
              <label>Email Adresi</label>
              <input type="email" class="form-control" placeholder="Email Adresiniz" name="email" required >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group">
              <label>Konu</label>
              <select class="form-control" name="topic">
              	<option>Bilgi</option>
              	<option>istek</option>
              	<option>Genel</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group">
              <label>Mesajınız</label>
              <textarea rows="5" class="form-control" placeholder="Mesajınız" name="message" required></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" name="sendMessageButton">Gönder</button>
        </form>
      </div>
		<div class="col-md-4">
 	  	<div class="card-body">Panel Contact</div>
      
      Adres: bla bla    
    
 	  </div> 	  
@endsection
 
  
 
