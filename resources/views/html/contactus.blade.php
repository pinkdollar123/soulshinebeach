<section id="header">
    <div class="card w-100">
       <img src="{{URL::to('/assets/images/shine.jpg')}}" alt="">
    </div>
</section>

<section id="paradise">
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-3" style=" font-size: 20px; font-family: 'Montserrat', sans-serif; color: #5e6d67;">Welcome to our website! We are always happy to hear from our visitors and customers. Whether you have a question, comment, or concern, we are here to help you. Our team is dedicated to providing excellent customer service and ensuring that you have the best experience possible on our website.</h1>
        </div>

    </div>
</div>
</section>

<section id="soul">
    
    <div class="container">
        <div class="row">
            <div class="card col-lg-6 mt-5 px-5" id="shine">
                <h5 class=" card-title  text-center mt-5  " style="font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 900;">About Us</h5>
                <p class="card-text mt-3 ms-1" style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;">Soul Shine Beach House is located in Sitio Talaudyong, Barangay Bacungan, Puerto Princesa, Palawan. This vacation rental house is just waiting for you to enjoy your vacation. The House is set right on the beach, just steps from the water. You will experience panoramic stunning views of the ocean and beach. Barbeque, Swim, Snorkel to the coral reef right from the property. Soul Shine Beach House is the perfect takeoff point for your ultimate Palawan experience. We can help you arrange trips to the underground river, Honda Bay island hopping, local snorkeling by Hen And Chicken Island or just simply relax to the sounds of the ocean right from the house. We offer several choices of accommodation tailor fit for your dream vacation.</p>
            </div>
            <div class="card col-lg-6 mt-5">
                <img src="{{URL::to('/assets/images/gallery2.jpg')}}" alt="" class="card-img-top rounded mt-4">
            </div>

            <div class="card col-lg-6 mt-3" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.5385472933845!2d118.65754057389228!3d9.972296590131677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ca815886fe5855%3A0xbf8ccdbec08fc83e!2sSoul%20Shine%20Beach%20House!5e0!3m2!1sen!2sph!4v1682562867794!5m2!1sen!2sph" width="410vw" height="350vh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="card-img-top rounded mt-4"></iframe>
            </div>
            <div class="card col-lg-6 mt-4 px-5" id="shine">
                <h3 class="card-title  text-center mt-5" style="font-size: 25px; font-family: 'Poppins', sans-serif; ">Soul Shine Beach House</h3>
                <p class="card-text ms-1 mt-3" style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;"><b>Resort Mobile:</b>+</p>
                <p style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;" class="card-text ms-1"><b>Reservation Mobile/Viber:</b>+</p>
                <br>
                <p style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;" class="card-text ms-1"><b>Reservations:<b>+</p>
                <p style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;" class="card-text ms-1"><b>Events:</b>+</p>
                <br>
                <p style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;" class="card-text ms-1"><b>Office Hours:</b>+</p>
                <p style="font-size: 16px; font-family: 'Montserrat', sans-serif; text-align: justify;" class="card-text ms-1">Monday to Sunday: 9:00AM to 5:00PM</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
<div class="container contactForm border-2 rounded-2">
<div class="row contactrow border-2 rounded-2">
    <div class="col-md-7 contact-col-md-7 border-2 rounded-2">
        <form id="contact-form" >
            <h4 style="color: white;">Get in touch</h4>
            <div class="mb-3 form-group"> 
                <label for="fName" class="form-label card-text" style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Name:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="fName" placeholder="Enter your name" onkeyup="validateName()">
                    <span id="name_error" style="font-size: 14px; font-family: 'Montserrat', sans-serif; text-align: justify; color: red;"></span>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label card-text" style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Email:</label>
                <div class="input-group ">
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" onkeyup="validateEmail()">
                    <span id="email_error" style="font-size: 14px; font-family: 'Montserrat', sans-serif; text-align: justify; color: red;"></span>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="contactNumber" class="form-label card-text" style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Contact Number:</label>
                <div class="input-group">
                    <input type="tel" class="form-control" id="contactNumber" placeholder="Enter your phone" onkeyup="validatePhone()">
                    <span id="phone_error" style="font-size: 14px; font-family: 'Montserrat', sans-serif; text-align: justify; color: red;"></span>
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="message" class="form-label card-text" style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Message:</label>
                <div class="input-group">
                    <textarea class="form-control" id="message" rows="3" placeholder="Write a message here" onkeyup="validateMessage()"></textarea>
                    <span id="message_error" style="font-size: 14px; font-family: 'Montserrat', sans-serif; text-align: justify; color: red;"></span>
                </div>
            </div>
            <div class="input-group form-group">
                <button type="submit" class="btn btn-primary">Send</button>
                <span id="submit_error" style="font-size: 14px; font-family: 'Montserrat', sans-serif; text-align: justify; color: red;"></span>
            </div>
        </form>
    </div>
    
    <div class="col-md-5 contact-col-md-5 border-2 rounded-2">
        <h4>Contact Us</h4>
        <hr>
        <div class="mt-5 border-2 rounded-2">
            <div class="d-flex">
                <i class="bi bi-geo-alt-fill"></i>
                <p style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Adress: Sitio Talaudyong, Bacungan, Puerto Princesa</p>
            </div>
            <hr>
            <div class="d-flex">
                <i class="bi bi-telephone-fill"></i>
                <p style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Phone number: 09208040258/09678964071</p>
            </div>
            <hr>
            <div class="d-flex">
                <i class="bi bi-envelope-at-fill"></i>
                <p style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Email: shareelovebaby@yahoo.com</p>
            </div>
            <hr>
            <div class="d-flex">
                <i class="bi bi-share-fill"></i>
                <p style="font-size: 17px; font-family: 'Montserrat', sans-serif; text-align: justify; color: white;">Fb Page:<a href="https://www.facebook.com/profile.php?id=100091240479435">Soul Shine Beach House</a></p>
            </div>
        </div>
    </div>
</div>
</div>
</section>