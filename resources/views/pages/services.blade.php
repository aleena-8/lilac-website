@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="services-page">
        <h1>Our Services</h1>
        <p class="services-intro">Lilac Infotech offers a board range of digital and software solutions, including: </p>

         <div class="service-card">
            <div class="icon">📱</div>
            <h3>Mobile & App Development</h3>
            <p>Custom Android and iOS applications built for performance, scalability, and business growth.</p>
        </div>

        <div class="service-card">
            <div class="icon">🌐</div>
            <h3>Web Development & Design</h3>
            <p>Responsive, secure, and scalable websites and web applications using modern technologies.</p>
        </div>

        <div class="service-card">
            <div class="icon">🎨</div>
            <h3>UI/UX Design</h3>
            <p>Intuitive and user-friendly interfaces that enhance customer engagement and experience.</p>
        </div>

        <div class="service-card">
            <div class="icon">📈</div>
            <h3>Digital Marketing</h3>
            <p>SEO, social media marketing, and branding strategies to grow your online presence.</p>
        </div>

        <div class="service-card">
            <div class="icon">🛠</div>
            <h3>Maintenance & Support</h3>
            <p>Ongoing technical support and system maintenance to ensure smooth operations.</p>
        </div>
    </div>
@endsection
