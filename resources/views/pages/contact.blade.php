@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <div class="contact-page">
        <h1>Contact Page</h1>
        <h3>Send Us a Message</h3>
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    
    <p>We would love to hear from you! Whether you have a project in mind, need consultation, or want to learn more about
        our services, feel free to contact us.</p>
    <h3>Contact Information</h3>
    <p><strong>Company Name:</strong> Lilac Infotech</p>
    <p><strong>Address:</strong> Cyberpark, Calicut, Kerala, India</p>
    <p><strong>Phone:</strong> +91 98765 43210</p>
    <p><strong>Email:</strong> info@lilacinfotech.com</p>
    </div>
@endsection
