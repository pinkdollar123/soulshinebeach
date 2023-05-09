@extends('layouts.register-app')
@section('content')
  {{-- <form action="{{route('register.perform')}}" method="POST" class="w-50">
    <input type="hidden"
    value="{{csrf_token()}}"
    name="_token">
    <h1 class="display-2">
      Register
    </h1>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text"
      name="name"
      id="name"
      placeholder="Enter your name"
      class="form-control"
      required>
      @if ($errors->has('name'))
        <span class="text-danger">Error {{$errors-first('name')}}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text"
        name="address"
        id="address"
        placeholder="Enter your address"
        class="form-control"
        required>
        @if ($errors->has('address'))
          <span class="text-danger">Error {{$errors-first('address')}}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="phone_number">Phone number</label>
        <input type="text"
        name="phone_number"
        id="phone_number"
        placeholder="Enter your Phone number"
        class="form-control"
        required>
        @if ($errors->has('phone_number'))
          <span class="text-danger">Error {{$errors-first('phone_number')}}</span>
        @endif
      </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email"
      name="email"
      id="email"
      placeholder="Enter your email"
      class="form-control"
      required>
      @if ($errors->has('email'))
        <span class="text-danger">Error {{$errors->first('email')}}</span>
      @endif
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password"
      name="password"
      id="password"
      placeholder="Enter your password"
      class="form-control"
      required>
      @if ($errors->has('password'))
        <span class="text-danger">Error {{$errors->first('password')}}</span>
      @endif
    </div>
    <div class="form-group">
      <label for="password_confirmation">Confirm Password</label>
      <input type="password"
      name="password_confirmation"
      id="password_confirmation"
      placeholder="Enter your password again"
      class="form-control"
      required>
      @if ($errors->has('password_confirmation'))
        <span class="text-danger">Error {{$errors->first('password_confirmation')}}</span>
      @endif
    </div>
    <input type="submit" value="Register" name="register">
    <a href="/" class="btn btn-warning">Back to Homepage</a>
  </form> --}}
{{-- 
  <div class="container mt-5 bg-transparent">
    <div class="row mb-5">
      <div class="card w-50 col-6 bg-transparent border">
        <div class="card-header">
          <h1 class="display-2 text-light">Register</h1>
        </div>
        <div class="card-body">
          <form action="{{route('register.perform')}}" method="POST" class="w-100 text-light m-1 fs-4">
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
              <i class="icon fas fa-solid fa-user"></i>
              @if ($errors->has('name'))
                <span class="text-danger">Error {{$errors-first('name')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control" required>
              <i class="icon fas fa-solid fa-map-pin"></i>
              @if ($errors->has('address'))
                <span class="text-danger">Error {{$errors-first('address')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="phone_number">Phone number</label>
              <input type="text" name="phone_number" id="phone_number" placeholder="Enter your Phone number" class="form-control" required>
              <i class="icon fas fa-solid fa-address-book"></i>
              @if ($errors->has('phone_number'))
                <span class="text-danger">Error {{$errors-first('phone_number')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
              <i class="icon fas fa-envelope"></i>
              @if ($errors->has('email'))
                <span class="text-danger">Error {{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>
              <i class="icon fas fa-lock"></i>
              @if ($errors->has('password'))
                <span class="text-danger">Error {{$errors->first('password')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="password_confirmation">Confirm Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password again" class="form-control" required>
              <i class="icon fas fa-lock"></i>
              @if ($errors->has('password_confirmation'))
                <span class="text-danger">Error {{$errors->first('password_confirmation')}}</span>
              @endif
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <input type="submit" value="Register" name="register" class="btn btn-primary">
              <a href="/" class="btn btn-warning">Back to Homepage</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-6 mt-5">
        <div class="card bg-transparent text-white">
          <div class="card-title">
            <h1>Welcome to our registration!</h1>
          </div>
          <div class="card-body">
            <div class="card-text">
              <p class="card-text bg-secondary border-none rounded-2 p-2 fs-4" style="--bs-bg-opacity: .5;">
                Registering for an account allows you to make reservations quickly and easily. Your information is kept secure and private.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  

  <section id="Home" class="gradient-form">
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-xl-10">
          <div class="card rounded-3 bg-transparent">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    {{-- <h1 class="text-light display-2">Soul Shine Beach House</h1> --}}
                    <h1 class="title-mid text-light display-3">Registration</h1>
                  </div>
                  <form action="{{route('register.perform')}}" method="POST" class="w-100 text-light m-1 fs-4">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
                      <i class="icon fas fa-solid fa-user"></i>
                      @if ($errors->has('name'))
                        <span class="text-danger">Error {{$errors-first('name')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control" required>
                      <i class="icon fas fa-solid fa-map-pin"></i>
                      @if ($errors->has('address'))
                        <span class="text-danger">Error {{$errors-first('address')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="phone_number">Phone number</label>
                      <input type="text" name="phone_number" id="phone_number" placeholder="Enter your Phone number" class="form-control" required>
                      <i class="icon fas fa-solid fa-address-book"></i>
                      @if ($errors->has('phone_number'))
                        <span class="text-danger">Error {{$errors-first('phone_number')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
                      <i class="icon fas fa-envelope"></i>
                      @if ($errors->has('email'))
                        <span class="text-danger">Error {{$errors->first('email')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>
                      <i class="icon fas fa-lock"></i>
                      @if ($errors->has('password'))
                        <span class="text-danger">Error {{$errors->first('password')}}</span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation">Confirm Password</label>
                      <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password again" class="form-control" required>
                      <i class="icon fas fa-lock"></i>
                      @if ($errors->has('password_confirmation'))
                        <span class="text-danger">Error {{$errors->first('password_confirmation')}}</span>
                      @endif
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                      <input type="submit" value="Register" name="register" class="btn btn-primary">
                      <a href="/" class="btn btn-warning">Back to Homepage</a>
                    </div>
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2 fs-5">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4 title-right fs-2">We are here to celebrate life and all its beauty. </h4>
                  <p class="mb-0 subtitle-right">We live and breathe the beauty of Palawan. Not just because it’s the Philippines’ top tourist destination, but also because of its natural richness and diverse culture.</p> <br>
                  <p class="subtitle-right">Soul Shine Beach House is the perfect takeoff point for your ultimate Palawan experience. We can help you arrange trips to the underground river, Honda Bay island hopping, local snorkeling by Hen And Chicken Island or just simply relax to the sounds of the ocean right from the house. We offer several choices of accommodation tailor fit for your dream vacation. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection