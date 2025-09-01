@extends('layouts.app')
@section('title', 'Partner With SunCity Laundry – B2B Laundry & Dry Cleaning Solutions')
@section('description', 'Join hands with SunCity Laundry and become our business partner in Dubai & Abu Dhabi. We offer reliable B2B laundry and dry cleaning services with flexible partnerships, dedicated support, and long-term growth opportunities.')
@section('title', 'Partner With SunCity Laundry – B2B Laundry & Dry Cleaning Solutions')
@section('description', 'Join hands with SunCity Laundry and become our business partner in Dubai & Abu Dhabi. We offer reliable B2B laundry and dry cleaning services with flexible partnerships, dedicated support, and long-term growth opportunities.')
@section('canonical', url()->current())
@section('content')
<style>
  .bg-primary {
    background-color: #0890F1 !important;
  }

  .text-primary {
    color: #0890F1 !important;
  }

  .btn-primary {
    background-color: #0890F1 !important;
    border-color: #0890F1 !important;
  }

  .btn-primary:hover {
    background-color: #FFD06D !important;
    /* darker shade for hover */
    border-color: #FFD06D !important;
  }

  .text-pri {
    color: #FFD06D !important;
  }

  .partner-section {
    background: url('assets/front/img/bg_partner.jpg') no-repeat center center/cover;
    position: relative;
    color: #fff;
  }

  .partner-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(43, 47, 123, 0.55);
    /* Dark overlay with brand color */
  }

  .partner-section1 {
    background: url('assets/front/img/bg1.png') no-repeat center center/cover;
    position: relative;
    color: #fff;
  }

  .partner-section1::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(105, 106, 120, 0.55);
    /* Dark overlay with brand color */
  }

  .partner-content {
    position: relative;
    z-index: 2;
  }

  .card-custom {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
  }

  .btn-custom {
    background-color: #FFC107;
    border: none;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .btn-custom:hover {
    background-color: #e0a800;
    transform: translateY(-2px);
  }


  .features-section {
    padding: 60px 0;
    background: rgba(122, 126, 190, 0.55);
  }

  .section-title {
    font-size: 34px;
    font-weight: 700;
    margin-bottom: 40px;
  }

  .feature-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
  }

  .check-icon {
    background: #2d3ecf;
    /* blue circle */
    color: #fff;
    border-radius: 50%;
    font-size: 14px;
    font-weight: bold;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    flex-shrink: 0;
  }

  .feature-item h3 {
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 5px;
  }

  .feature-item p {
    margin: 0;
    color: #555;
    font-size: 15px;
    line-height: 1.6;
  }

  .img-fluid {
    max-width: 100%;
    height: auto;
  }
</style>


<section class="partner-section py-5">
  <div class="container partner-content">
    <div class="row align-items-center">

      <!-- Left Side -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-white">
        <h2 class="fw-bold mb-4 text-white">
          Partner with <span class="text-pri">Suncity Laundry</span>
        </h2>
        <p class="lead mb-3 text-white">
          Tailored laundry & dry cleaning services for hotels, gyms, spas, restaurants, and corporate clients.
        </p>
        <p class="mb-4 text-white">
          Reliable, professional, and flexible—let’s work together to keep your business running smoothly with spotless linens, uniforms, and fabrics.
        </p>
      </div>

      <!-- Right Side Form -->
      <div class="col-lg-6">
        <div class="card card-custom bg-light text-dark">
          <div class="card-body p-4">
            <form class="partnerForm">
              @csrf
              <div class="mb-3">
                <label class="form-label"><i class="bi bi-building"></i> Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Enter company name">
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-person"></i> First Name</label>
                  <input type="text" name="first_name" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-person"></i> Last Name</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-envelope"></i> Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Your email">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-telephone"></i> Phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="Phone number">
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label"><i class="bi bi-geo-alt"></i> Location</label>
                <input type="text" name="location" class="form-control" placeholder="Your location">
              </div>

              <div class="mb-3">
                <label class="form-label"><i class="bi bi-chat-dots"></i> Tell us about your needs</label>
                <textarea name="requirements" class="form-control" rows="3" placeholder="Write your requirements..."></textarea>
              </div>

              <button type="submit" class="btn btn-custom w-100 rounded-3">
                <i class="bi bi-send-fill me-2"></i> Get in Touch
              </button>
            </form>

            <!-- Response message -->
            <div id="formMessage" class="mt-3"></div>

            <div class="d-flex align-items-center mt-3">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-2" width="40" height="40" alt="Team member">
              <small class="text-muted">Our support team will respond within 24 hours.</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="py-5 bg-light px-5">
  <div class="container-fluid ">
    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">Our Services</h2>
      <p class="text-muted">Learn more about how to partner with us to provide commercial laundry services for your business or organization.</p>
    </div>

    <!-- Services Grid -->
    <div class="row g-4">

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-house-door fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Residential</h5>
          <p class="text-muted">Join hundreds of property managers and communities offering premium laundry and dry cleaning pickup & delivery as a resident perk.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-building fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Rental Properties</h5>
          <p class="text-muted">Commercial towel & linen laundry service for short-term rentals, Airbnb hosts, VRBOs, and vacation properties.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-heart-pulse fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Health & Wellness</h5>
          <p class="text-muted">Commercial towel & linen services for gyms, spas, salons, wellness centers, yoga studios, and more.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-cup-hot fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Restaurants & Cafes</h5>
          <p class="text-muted">Linen, apron, and uniform cleaning services for restaurants, cafes, bakeries, catering companies & food service businesses.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-person-badge fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Uniforms</h5>
          <p class="text-muted">Workwear and uniform cleaning for your onsite team with professional finishing.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Service Item -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-calendar-event fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Events</h5>
          <p class="text-muted">Laundry & dry cleaning services for meetings, conferences, retreats, and corporate programs.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Employers -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-person-workspace fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Employers</h5>
          <p class="text-muted">Offer laundry and dry cleaning services as a premium employee benefit.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Education -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-mortarboard fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Education</h5>
          <p class="text-muted">Laundry and dry cleaning services for schools, colleges, and universities.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>

      <!-- Cleaning Partners -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-basket fs-1 text-primary"></i>
          </div>
          <h5 class="fw-bold">Cleaning Partners</h5>
          <p class="text-muted">Join our network of trusted laundry and dry cleaning providers to grow your business with reliable, high-quality services.</p>
          <a href="#" class="fw-bold text-primary text-decoration-none">Learn more →</a>
        </div>
      </div>



    </div>
  </div>
</section>

<div class="row py-4  mt-2 justify-content-center  align-items-center " style="background-color: #0890F1;">
  <div class="col-auto  text-center ">
    <h2 class="fw-bold display-6 text-white">
      Top Reasons to<span class="text-pri"> Grow Your Laundry <br> Business</span>
      With Us
    </h2>

  </div>

</div>

<!-- Hero Section -->
<section class="position-relative bg-gradient"
  style="background: linear-gradient(135deg, #f0f4ff, #ffffff);">
  <div class="container py-5">
    <div class="row align-items-center">

      <!-- Left Content -->
      <div class="col-lg-6">
        <h1 class="fw-bold display-4 mb-3">
          Become a <span class="text-primary">Laundry Partner</span>
          & Grow With Us
        </h1>
        <p class="lead text-muted mb-4">
          Get more business, more customers, and more revenue —
          without the extra hassle. Partner with us today.
        </p>



        <!-- CTAs -->
        <div class="d-flex gap-3">
          <a href="#register"
            class="btn btn-primary btn-lg px-4 rounded-pill shadow">
            Register Now
          </a>
          <a href="#learn-more"
            class="btn btn-outline-dark btn-lg px-4 rounded-pill">
            Learn More
          </a>
        </div>
      </div>

      <!-- Right Visual -->
      <div class="col-lg-6 text-center position-relative mt-5 mt-lg-0">
        <img src="{{asset('/assets/front/img/partners.jpg')}}"
          alt="Partnership Illustration"
          class="img-fluid" style="max-height: 400px;">

        <!-- Floating Stats -->

      </div>

    </div>
  </div>

  <!-- Background Circles -->
  <div class="position-absolute top-0 start-0 translate-middle opacity-25 d-none d-md-block">
  <div class="bg-primary rounded-circle" style="width: 180px; height: 180px; margin-top:320px;"></div>
</div>


</section>

<section class="features-section">
  <div class="container">
    <div class="row ">

      <h2 class="section-title text-center py-3">
        No sign up fee, no hidden costs and a dedicated <br>
        Facility support team to assist
      </h2>
      <!-- Left Content -->
      <div class="col-md-6">

        <div class="feature-item">
          <span class="check-icon">✔</span>
          <div>
            <h3>No hidden costs</h3>
            <p>There is no sign up fee, no hidden costs. Everything is simple and smooth.</p>
          </div>
        </div>

        <div class="feature-item">
          <span class="check-icon">✔</span>
          <div>
            <h3>Support team</h3>
            <p>We have a dedicated Facility support team to assist when needed</p>
          </div>
        </div>

        <div class="feature-item">
          <span class="check-icon">✔</span>
          <div>
            <h3>Do what you do best</h3>
            <p>As our Dry Cleaning Partner, all you need to do is what you do best,
              provide top quality processing</p>
          </div>
        </div>
      </div>

      <!-- Right Image -->
      <div class="col-md-6 ">
        <img src="{{asset('assets/front/img/bg1.png')}}" alt="Dry Cleaning" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</section>



<section class="overflow-hidden space-bottom mt-5">
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="title-area text-center pe-xl-4 ps-xl-4">
          <h2 class="sub-title">Why <a href="https://laundryservice.ae/"> LaundryService.ae?</h2></a>
          <h3 style="font-size: 26px" class="sec-title">More than 20 years of trusted laundry services in Dubai</h3>
        </div>
      </div>
    </div>
    <div class="row gy-4 justify-content-between align-items-center">
      <div class="col-md-6 col-xl-auto">
        <div class="service-block style1 wow fadeInLeft">
          <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_5.svg')}}" alt="Service" />
          </div>
          <div class="service-block_wrapper">
            <h3 class="box-title"><a href="{{route('booking-form')}}">No hidden costs</a></h3>
            <p class="mb-0">Our support team can walk you through the application</p>
          </div>
        </div>
        <div class="service-block style1 wow fadeInLeft">
          <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_2.svg')}}" alt="Service" />
          </div>
          <div class="service-block_wrapper">
            <h3 class="box-title"><a href="{{route('booking-form')}}">Focus on your work</a></h3>
            <p class="mb-0">Our team will handle collection, delivery and customer service</p>
          </div>
        </div>
        <div class="service-block style1 wow fadeInLeft">
          <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
          </div>
          <div class="service-block_wrapper">
            <h3 class="box-title"><a href="{{route('booking-form')}}">Consistent support</a></h3>
            <p class="mb-0">We support our partners every step of the way and will ensure yours and your customers’ experience is simple and straightforward.</p>
          </div>

        </div>
        <div class="service-block style1 wow fadeInLeft">
          <div class="service-block_img"><img loading="lazy" src="{{asset('/assets/front/img/icon/service_1_3.svg')}}" alt="Service" />
          </div>
          <div class="service-block_wrapper">
            <h3 class="box-title"><a href="{{route('booking-form')}}">We look after everything</a></h3>
            <p class="mb-0">From marketing and sales to order tracking and customer service, all you need to do is process the orders and reap the benefits</p>
          </div>

        </div>
      </div>
      <div class="col col-xl-auto text-center d-none d-xl-block">
        <div class="service-image wow fadeInUp"><img loading="lazy" src="{{asset('/assets/front/img/business1.png')}}"
            alt="" /></div>
      </div>

    </div>
  </div>
</section>

<section class="partner-section1 py-5">
  <div class="container partner-content">
    <div class="row align-items-center">



      <!-- Right Side Form -->
      <div class="col-lg-6">
        <div class="card card-custom bg-light text-dark">
          <div class="card-body p-4">
            <h3 class="py-2">Get In Touch</h3>
            <form class="partnerForm">
              @csrf
              <div class="mb-3">
                <label class="form-label"><i class="bi bi-building"></i> Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Enter company name">
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-person"></i> First Name</label>
                  <input type="text" name="first_name" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-person"></i> Last Name</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-envelope"></i> Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Your email">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label"><i class="bi bi-telephone"></i> Phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="Phone number">
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label"><i class="bi bi-geo-alt"></i> Location</label>
                <input type="text" name="location" class="form-control" placeholder="Your location">
              </div>

              <div class="mb-3">
                <label class="form-label"><i class="bi bi-chat-dots"></i> Tell us about your needs</label>
                <textarea name="requirements" class="form-control" rows="3" placeholder="Write your requirements..."></textarea>
              </div>

              <button type="submit" class="btn btn-custom w-100 rounded-3">
                <i class="bi bi-send-fill me-2"></i> Get in Touch
              </button>
            </form>

            <!-- Response message -->
            <div id="formMessage" class="mt-3"></div>

            <div class="d-flex align-items-center mt-3">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-2" width="40" height="40" alt="Team member">
              <small class="text-muted">Our support team will respond within 24 hours.</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<div class="space overflow-hidden" id="faq-sec">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-xl-6 text-center text-xl-start align-self-center">
        <div class="">
          <div class="title-area text-center text-xl-start">
            <span class="sub-title style1">FAQ</span>
            <h2 class="sec-title">Frequently Asked Have Any Questions</h2>
          </div>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-card">
              <div class="accordion-header" id="collapse-item-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What
                  Services Do You Offer?</button>
              </div>
              <div id="collapse-1" class="accordion-collapse collapse show"
                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p class="faq-text">We value your feedback! Let us know about your experience
                    and if there's anything else we can do to make your laundry service even
                    better. We're always here to assist you.</p>
                </div>
              </div>
            </div>
            <div class="accordion-card">
              <div class="accordion-header" id="collapse-item-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                  Do You Have Certified Technicians?
                </button>
              </div>
              <div id="collapse-2" class="accordion-collapse collapse"
                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p class="faq-text">We value your feedback! Let us know about your experience
                    and if there's anything else we can do to make your laundry service even
                    better. We're always here to assist you.</p>
                </div>
              </div>
            </div>
            <div class="accordion-card">
              <div class="accordion-header" id="collapse-item-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                  Can You Provide a Customized Service Plan?
                </button>
              </div>
              <div id="collapse-3" class="accordion-collapse collapse"
                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p class="faq-text">We value your feedback! Let us know about your experience
                    and if there's anything else we can do to make your laundry service even
                    better. We're always here to assist you.</p>
                </div>
              </div>
            </div>
            <div class="accordion-card">
              <div class="accordion-header" id="collapse-item-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                  What is Your Pricing Structure?
                </button>
              </div>
              <div id="collapse-4" class="accordion-collapse collapse"
                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p class="faq-text">We value your feedback! Let us know about your experience
                    and if there's anything else we can do to make your laundry service even
                    better. We're always here to assist you.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="faq-img1 ps-xl-4">
          <div class="img1"><img loading="lazy" src="{{asset('/assets/front/img/normal/faq_1_1.png')}}" alt="faq" /></div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('.partnerForm').on('submit', function(e) {
    e.preventDefault();

    let form = $(this); // ye current form ko pick karega
    $.ajax({
      url: "{{ route('partners.ajaxStore') }}",
      type: "POST",
      data: form.serialize(),
      success: function(response) {

        if (response.status) {
          form.find('.formMessage').html(
            `<div class="alert alert-success">${response.message}</div>`
          );
          form[0].reset();
        }
      },
      error: function(xhr) {
        let errors = xhr.responseJSON.errors;
        let errorList = "";
        $.each(errors, function(key, value) {
          errorList += `<li>${value[0]}</li>`;
        });
        form.find('.formMessage').html(
          `<div class="alert alert-danger"><ul>${errorList}</ul></div>`
        );
      }
    });
  });
</script>
@endsection