@extends('layouts.app')


@section('content')
    <div>
        @if (Session::has('message'))
            <div class="message-wrapper">
                <div class="success-message">
                    <div> {{ Session::get('message') }}</div>
                </div>
            </div>
        @endif
        @if (Session::has('error'))
            <div>
                {{ Session::get('error') }}
            </div>
        @endif
        <section id="contact-us" class="contact-us section">
            <div class="container">
                <div class="contact-head">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="form-main">
                                    <h3 class="inner-title left">Contact Form</h3>
                                    <form class="form form-contact-us" method="post" action="{{ route('contact_add') }}">
                                        @csrf
                                        @method('post')



                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="input">
                                                    <input name="fullname" type="text" class="input-field" value=""
                                                        required />
                                                    <label class="input-label">Full name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="input">
                                                    <input name="address" type="text" class="input-field" value=""
                                                        required />
                                                    <label class="input-label">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="input">
                                                    <input name="email" type="email" class="input-field" value=""
                                                        required />
                                                    <label class="input-label">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="input">
                                                    <input name="phone" type="text" class="input-field" value=""
                                                        required />
                                                    <label class="input-label">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4">
                                                <div class="input">
                                                    <textarea name="message" class="input-field" rows="6" required></textarea>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn">
                                                        Submit Message
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="contact-info">
                                    <div class="single-head">
                                        <h3 class="inner-title">Contact Info</h3>
                                        <div class="single-info">
                                            <i class="fas fa-map-marker"></i>
                                            <ul>
                                                <span>Location</span>
                                                <li>Kathmandu, Nepal</li>
                                            </ul>
                                        </div>
                                        <div class="single-info">
                                            <i class="fas fa-phone"></i>
                                            <ul>
                                                <span>Call Us</span>
                                                <li><a href="#">+977 987456321</a></li>
                                                <li><a href="#">+977 123654789</a></li>
                                            </ul>
                                        </div>
                                        <div class="single-info">
                                            <i class="fas fa-envelope"></i>
                                            <ul>
                                                <span>Mail Us</span>
                                                <li>
                                                    <a href=""><span class="__cf_email__">info@website.com</span></a>
                                                </li>
                                                <li>
                                                    <a href=""><span
                                                            class="__cf_email__">contact@domain.com</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single-info">
                                            <i class="fas fa-clock"></i>
                                            <ul>
                                                <span>Office Hour</span>
                                                <li>Monday - Friday (9.00-19.00)</li>
                                                <li>Sunday - Thusday (10.00-06.00)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact-Us -->
        <div class="responsive-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14133.9747660901!2d85.34460184999999!3d27.67113235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1645353460998!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection
