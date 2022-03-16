@extends('layouts.layout')

@section('content')
    <!-- Booking Section -->

    <section id="form" data-aos="fade-up">
        <div class="container">
            <h3 class="form__title">Book Table</h3>
            <div class="form__wrapper">
                <form name="booking" action="/bookings" method="POST" snetlify>
                    @csrf

                    <div class="form__group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form__group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                    <div class="form__group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form__group">
                        <label for="tableType">Table Type</label>
                        <select name="tableType" id="tableType" required>
                            <option selected disabled>Choose</option>
                            <option value="small">Small(2 persons)</option>
                            <option value="medium">Small(4 persons)</option>
                            <option value="large">large(6 persons)</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <label for="guestNumber">Guest Number</label>
                        <input type="number" id="guestNumber" name="guestNumber" min="1" max="10" required>
                    </div>
                    <div class="form__group">
                        <label for="placement">Placement</label>
                        <select name="Placement" id="placement">
                            <option selected disabled>Choose</option>
                            <option value="outdoor">Outdoor</option>
                            <option value="indoor">Indoor</option>
                            <option value="rooftop">rooftop</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="Date" required>
                    </div>
                    <div class="form__group">
                        <label for="time">time</label>
                        <input type="time" id="time" name="Time" required>
                    </div>
                    <div class="form__group form__group__full">
                        <label for="note">Note</label>
                        <textarea name="Note" id="note" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn primary-btn">Book Table</button>
                </form>
            </div>
        </div>
    </section>
    <!-- End Booking Section -->
@endsection
