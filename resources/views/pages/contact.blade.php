@extends('layouts.fontend-master')
@section('content')
       <!-- Hero Section Begin -->
       <section class="hero">
        </section>
        <!-- Hero Section End -->
        
        <div class="container mt-5 container-contact-form">
      <div class="card">
        <div class="card-block">
        <div class="col-lg-12">
            @if (count($errors) > 0)
              <div class="alert alert-danger" role="alert">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
            @endif
          </div>

          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Don't hesitate to contact us directly. Our team will contact you within a few hours to help you.</p>
          <form action="{{ action('ContactController@index') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group col-lg-4">
              <label class="form-control-label" for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group col-lg-4">
              <label class="form-control-label" for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required>
            </div>
            <div class="form-group col-lg-4">
              <label class="form-control-label" for="email">E-mail address</label>
              <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group col-lg-12">
              <label class="form-control-label" for="message"></label>
              <textarea class="form-control" id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <section class="from-blog spad">
    </section>
@endsection
