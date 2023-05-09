@extends('layouts.auth-master')
@section('content')

<section id="Home" class="gradient-form mt-5" >
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-xl-10">
        <div class="card rounded-3 bg-transparent text-light">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="">
                  {{-- <h1 class="title-mid text-light display-2 fw-bold">Soul Shine Beach House</h1> --}}
                  <h4 class="mt-1 mb-5 pb-1"></h4>
                </div>
                
                <form action="{{route('login.perform')}}" method="POST" class="text-start fs-4">
                  <input type="hidden"
                  name="_token"
                  value="{{csrf_token()}}">
                
                  <h1 class="display-3 text-center">
                    Login
                  </h1>
                  @include('layouts.partials.messages')
                  <div class="form-group">
                
                    <label for="email">Email</label>
                    <input type="email" 
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Enter your Email">
                  </div>
                
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Enter your password">
                  </div>
                
                  <input type="submit"
                  class="btn btn-primary"
                  value="Login">
                  @guest
                  <div class="d-flex gap-2 justify-content-center">
                    <p class="fs-6">Don't have an account yet? Register now! <a href="/register" class="text-decoration-none fw-bold fs-4 text-light "><u>Register</u></a></p>
                  </div>
                  @endguest
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center fs-5">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4 fs-3">The world is a beautiful place, and we're here to celebrate it. </h4>
                <p class="mb-0">At Soul Shine Beach, we're surrounded by breathtaking scenery and the wonders of nature. Whether it's the stunning mountains, the tranquil lakes, or the lush forests, there's something here for everyone.</p> <br>

                {{-- <p>Our Beach-houses is the perfect base camp for your next adventure. We can help you plan hiking trips, kayaking excursions, fishing trips, or simply offer recommendations for scenic drives or peaceful walks. We have a variety of cozy cabins and comfortable rooms to suit your needs and budget.
                Come join us and experience the magic of the great outdoors. Let us help you make memories that will last a lifetime.</p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection