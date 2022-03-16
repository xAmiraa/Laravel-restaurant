  <!-- Store Info Section -->
  @extends('layouts.layout')

@section('content')
  <section id="storeInfo" data-aos="fade-up">
    <div class="container">
      <div class="storeInfo__wrapper">
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/wall-clock-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            10 AM - 7 PM
          </h3>
          <p class="storeInfo__text">
            Opening Hour
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/address-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            GEC, Chittagong
          </h3>
          <p class="storeInfo__text">
            Address
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/phone-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            +880123443
          </h3>
          <p class="storeInfo__text">
            Call Now
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Store Info Section -->
  <!-- Contact Form Section -->
  <section id="form" data-aos="fade-down">
    <div class="container">
      <h3 class="form__title">
        Contact & Inquiry
      </h3>
      <div class="form__wrapper">
        <form name="contact" method="POST" netlify>
          <div class="form__group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="First Name" required>
          </div>
          <div class="form__group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="Last Name" required>
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="Email" required>
          </div>
          <div class="form__group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="Subject" required>
          </div>
          <div class="form__group form__group__full">
            <label for="message">Message</label>
            <textarea name="Message" id="message" cols="30" rows="10" required></textarea>
          </div>
          <button type="submit" class="btn primary-btn">Send</button>
        </form>
      </div>
    </div>
  </section>
  @endsection
