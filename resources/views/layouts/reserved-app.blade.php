
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/css/reserved.css') }}">
  <title>Your Reservation</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat:wght@200&family=Poppins:wght@900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@400;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    
      .card{
      border: none;
      }
      #cards2{
          background-color: #5e6d67;
      }
      #socials1{
          color: whitesmoke;;
          font-size: 20px;  
          background-color: rgb(81, 97, 90);
          padding: 5px;
          }
      #socials1:hover{
          color: whitesmoke;;
          background-color: rgb(54, 62, 59);
          }
      a {
          text-decoration: none;
          color: white;
          }
      #paradise{
          background-color: rgb(233, 232, 232);
          padding-top: 40px;
          padding-bottom: 40px;
      }
      #soul {
          padding-top: 50px;
          padding-bottom: 80px;
      }
      #souls{
          background-color: #586b63; 
          font-family: 'Poppins', sans-serif; 
          font-weight: 100;
      }
      #souls:hover{
          background-color: #36433d;
          color: white;
      }
      .navbar {
          background-color: #5e6d67;
      }
      #rooms{
          padding-top: 50px;
          padding-bottom: 80px;
          background-color: #5e6d67;
      }
      #daytour{
          
          padding-top: 50px;
          padding-bottom: 50px;
      }
      #testimonials{
          padding-top: 60px;
          padding-bottom: 80px;
          background-color: rgb(233, 232, 232);
      }
       .carousel-control-prev-icon{
         background-color: #83988f;
         height: 10vh;
         
      }
      .carousel-control-next-icon{
          background-color: #83988f;
          height: 10vh;
         
      }
      #card1{
          background-color: rgb(233, 232, 232);
      }
      .nav-item{
          font-family: 'Montserrat', sans-serif;
          color: white;
          font-weight: bolder;
      }
     .card-text{
      font-family: 'Montserrat', sans-serif;
      font-weight: bolder;
     }
      .card-title{
          font-family: 'Poppins', sans-serif;
          font-weight: bolder;
      }
      .card-img-top{
          transition: 1s ease;
     }
     .card-img-top:hover{
          -webkit-transform: scale(0.8);
          -ms-transform: scale(0.8);
          transform: scale(0.8);
          transition: 1s ease;
      }
     #room:hover{
      color: white;
      background-color: rgb(54, 62, 59);
      }

     .navs {
      display: inline-block;
      position: relative;
      color: whitesmoke;
      padding-bottom: 3px;
      }

      #tag{
      font-size: 60px; 
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
      }
      .navs::after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 3px;
      bottom: 0;
      left: 0;
      background-color: rgb(66, 77, 73);
      transform-origin: bottom right;
      transition: transform 0.30s ease-out;
      }
      .navs:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
      }
      #footer{
          padding-top: 50px;
          background-color: #5e6d67;
      }
  </style>
</head>
<body class="">
  <main class="">
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
