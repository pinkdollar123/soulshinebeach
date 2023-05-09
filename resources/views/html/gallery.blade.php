<section id="header">
    <div class="container mt-5">
        <div class="row">
            <div class="card col-lg-8">                  
                <img src="{{URL::to('/assets/images/day2.jpg')}}" alt="This is an image" class="rounded">     
            </div>
            <div class="card col-lg-4 d-flex justify-content-center">
                <h5 class="card-title ms-3 mt-4 display-2" style="font-family: 'Poppins', sans-serif; color: #55625d;"><b>Gallery</b></h5>
                <h5 class="card-title ms-3 " style="font-family: 'Poppins', sans-serif; font-size: 25px;">Every image is a triumph over chaos.</h5>
                <p class="card-text ms-3 mt-3 lead" style="font-size: 13px;">EXPLORE THE GALLERY AND IMAGINE WHAT YOUR NEXT BEACH HOLIDAY WILL BE LIKE</p>
            </div>

        </div>

    </div>
</section>


<section id="gallery">
    <div class="container mt-5">
        <div class="row">
        <h1 class="text-center" style=" font-size: 45px; font-family: 'Poppins', sans-serif;"><b>Gallery</b></h1>
        <hr class="mx-auto" style="width: 90px; border: 2px solid #3a4440 ; border-radius: 5px;">
        <div class="d-flex justify-content-center px-5 mt-3 mb-5">
            
            <div id="myBtnContainer">
                <button class="gall active" onclick="filterSelection('all')"> Show all</button>
                <button class="gall" onclick="filterSelection('places')"> Places</button>
                <button class="gall" onclick="filterSelection('rooms')"> Rooms</button>
                <button class="gall" onclick="filterSelection('activities')"> Activities</button>
                <button class="gall" onclick="filterSelection('visitors')">Visitors</button>
              </div>
        </div>
    

            <!--Places Category-->
            <div class="card col-lg-3 col-md-4 ">
                <div class="column places">
                <img src="{{URL::to('/assets/images/gallery1.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4 ">
                <div class="column places">
                <img src="{{URL::to('/assets/images/gallery2.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4 ">
                <div class="column places">
                <img src="{{URL::to('/assets/images/day3.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column places">
                <img src="{{URL::to('/assets/images/place3.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column places">
                <img src="{{URL::to('/assets/images/day1.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column places">
                <img src="{{URL::to('/assets/images/day2.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column places">
                <img src="{{URL::to('/assets/images/gallery3.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column places">
                <img src="{{URL::to('/assets/images/place2.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <!--Rooms Category-->
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room1.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room2.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room3.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room4.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room5.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room7.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room8.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room10.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room11.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room12.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column rooms">
                <img src="{{URL::to('/assets/images/room13.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
        
            <!--Activities Category-->
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity1.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity2.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity5.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity7.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity10.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity8.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity11.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column activities">
                <img src="{{URL::to('/assets/images/activity13.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <!--Visitors Category-->
            
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor11.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor12.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor13.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor8.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor9.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor3.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor4.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div>
            <div class="card col-lg-3 col-md-4">
                <div class="column visitors">
                <img src="{{URL::to('/assets/images/visitor2.jpg')}}" alt="This is an image" class="img-fluid mt-3">
            </div>
            </div> 

    </div>
</section>

<script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }
    
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }
    
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }
    
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("gall");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    </script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>