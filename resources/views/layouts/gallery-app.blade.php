
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>Gallery</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
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

      #header{
          padding-top: 50px;
          padding-bottom: 40px;
      }
     
      .navbar {
          background-color: #5e6d67;
      }
      #gallery{
          padding-top: 50px;
          padding-bottom: 80px;   
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

      .active{
            font-weight: bolder;
            background-color: #36433d;
            border-radius: 4px;
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
          padding-bottom: 80px;
          background-color: #5e6d67;
      }
      #paradise{
          padding-top: 50px;
          padding-bottom: 80px;
         
      }
      .-img-fluid{
          transition: 1s ease;
     }
     .img-fluid:hover{
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.1);
      transform: scale(1.1);
      transition: 1s ease;
     }
     
     .column {
      display: none; /* Hide columns by default */
    }
 
      .show {
      display: block;
      }
      .gall {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: white;
      cursor: pointer;
      font-family: 'Montserrat', sans-serif;
      font-weight: bolder;
      }

      .gall:hover {
      background-color: #586b63;
      color: white;
      }

      .gall.active {
      background-color: #586b63;
      color: white;
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
