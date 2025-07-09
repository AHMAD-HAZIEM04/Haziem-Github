
{{--<!DOCTYPE html>
<html lang="en">

<body class="index-page">

  @extends('master.layout')
  @section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-img.jpg" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <h2>I am Ahmad Haziem</h2>
        <p><span class="typed" data-typed-items="Student, Streetlifter, Freelancer, Athlete"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">


      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Students</h2>
        <p>Here are some of our students</p>
      </div><!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">


       {{-- <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">


            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
            </div><!-- End Info Item -->


            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div><!-- End Info Item -->


            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div>
            </div><!-- End Info Item -->


          </div>
        </div> --}}


     {{--   <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">


            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $student->matric_id}}</td>
                    <td>{{ $student->first_name}}</td>
                    <td>{{ $student->last_name}}</td>
                    <td>{{ $student->email}}</td>
                    <td>{{ $student->phone_no}}</td>
                  </tr>
                </tbody>
              </table>


          </div>
        </form><!-- End Contact Form -->


      </div>


    </section><!-- /Contact Section -->

    @endsection

</body>


</html>



