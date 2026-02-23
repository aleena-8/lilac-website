<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Lilac Infotech</title>
    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
            /* Full height for flex layout */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Flex layout for whole page */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* At least full viewport height */
        }

        /* Navigation */
        nav {
            background-color: #3a526a;
            padding: 15px 30px;
            display: flex;
            justify-content: flex-end;
            /* Right align links */
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #fff;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #ffeaa7;
            text-decoration: underline;
        }

        nav a.active {
            font-weight: bold;
            text-decoration: underline;
            color: #ffeaa7;
        }

        /* Main content container */
        .container {
            flex: 1;
            /* Takes remaining space, pushes footer down */

            margin: 10px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }


        .home-page {
            padding: 100px 20px;
            background: linear-gradient(to right, #f8fffe, #e6f4f2);
            text-align: center;
        }

        .home-content {
            max-width: 900px;
            margin: auto;
        }

        .home-page h1 {
            font-size: 40px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .home-page h2 {
            font-size: 22px;
            margin-bottom: 25px;
            color: #5cb0a3;
            font-weight: 500;
        }

        .home-page p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 16px;
        }

        /* Button Styling (matching other pages) */
        .btn {
            display: inline-block;
            background: #5cb0a3;
            color: #ffffff;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s ease;
            font-weight: 500;
        }

        .btn:hover {
            background: #4aa294;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(92, 176, 163, 0.3);
        }


        /* About page*/
        .about-page {
            padding: 80px 20px;
            max-width: 1100px;
            margin: auto;
        }

        .about-page h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: #2c3e50;
        }

        .about-intro {
            text-align: center;
            max-width: 850px;
            margin: 0 auto 50px;
            color: #555;
            line-height: 1.8;
        }

        /* Mission & Vision Grid */
        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Card Style (matching services) */
        .about-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(92, 176, 163, 0.15);
            transition: all 0.3s ease;
        }

        .about-card h3 {
            color: #5cb0a3;
            margin-bottom: 15px;
        }

        .about-card p {
            color: #555;
            line-height: 1.6;
        }

        /* Hover Animation */
        .about-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(92, 176, 163, 0.3);
        }

        /* Core Values */
        .values-section {
            text-align: center;
        }

        .values-section h3 {
            margin-bottom: 20px;
            color: #5cb0a3;
        }

        .values-section ul {
            list-style: none;
            padding: 0;
        }

        .values-section li {
            display: inline-block;
            background: #ffffff;
            margin: 10px;
            padding: 12px 20px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(92, 176, 163, 0.15);
            transition: 0.3s;
            font-size: 14px;
        }

        .values-section li:hover {
            background: #5cb0a3;
            color: white;
        }


        /* Service page*/
        .services-page {
            padding: 80px 20px;
            text-align: center;
        }

        .services-page h1 {
            margin-bottom: 15px;
            font-size: 32px;
            color: #2c3e50;
        }

        .services-intro {
            max-width: 700px;
            margin: 0 auto 50px;
            color: #555;
            font-size: 16px;
        }

        /* Grid Layout */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
        }

        /* Card Design */
        .service-card {
            background: #ffffff;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(92, 176, 163, 0.15);
            transition: all 0.3s ease;
            text-align: center;
        }

        /* Icon */
        .service-card .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        /* Card Title */
        .service-card h3 {
            margin-bottom: 10px;
            color: #5cb0a3;
            font-size: 20px;
        }

        /* Card Text */
        .service-card p {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }

        /* Hover Animation */
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(92, 176, 163, 0.3);
        }


        /*contact page*/
        .contact-page {
            padding: 80px 20px;
            max-width: 1100px;
            margin: auto;
        }

        .contact-page h1 {
            text-align: center;
            margin-bottom: 15px;
            font-size: 32px;
            color: #2c3e50;
        }

        .contact-intro {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #555;
            line-height: 1.7;
        }

        /* Grid Layout */
        .contact-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        /* Card Style (same as services & about) */
        .contact-card {
            background: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(92, 176, 163, 0.15);
            transition: all 0.3s ease;
        }

        .contact-card h3 {
            margin-bottom: 20px;
            color: #5cb0a3;
        }

        /* Hover Animation */
        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(92, 176, 163, 0.3);
        }

        /* Form Styling */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 14px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: #5cb0a3;
            box-shadow: 0 0 8px rgba(92, 176, 163, 0.2);
        }

        /* Button */
        .btn {
            background: #5cb0a3;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #4aa294;
        }

        /* Contact details text */
        .contact-card p {
            margin-bottom: 10px;
            color: #555;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            color: #666;
            font-size: 0.9em;
            border-top: 1px solid #ddd;
            background-color: #f4f4f9;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <!-- Page Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} Lilac Infotech. All rights reserved.
    </footer>

</body>

</html>
