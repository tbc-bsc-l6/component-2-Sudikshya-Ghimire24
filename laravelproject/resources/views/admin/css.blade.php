<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Dashboard - Beauty Shop</title>
<meta name="description" content="Admin Dashboard - Manage Your Beauty Products with Ease">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">

<!-- Bootstrap CSS-->
<link rel="stylesheet" href="{{asset('/admincss/vendor/bootstrap/css/bootstrap.min.css')}}">

<!-- Font Awesome CSS-->
<link rel="stylesheet" href="{{asset('/admincss/vendor/font-awesome/css/font-awesome.min.css')}}">

<!-- Custom Font Icons CSS-->
<link rel="stylesheet" href="{{asset('/admincss/css/font.css')}}">

<!-- Google Fonts - Muli -->
<link rel="stylesheet" href="{{asset('/admincss/https://fonts.googleapis.com/css?family=Muli:300,400,700&display=swap')}}">

<!-- Theme Stylesheet -->
<link rel="stylesheet" href="{{asset('/admincss/css/style.default.css')}}" id="theme-stylesheet">

<!-- Custom Stylesheet - For Your Changes -->
<link rel="stylesheet" href="{{asset('/admincss/css/custom.css')}}">

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('/admincss/img/favicon.ico')}}">

<!-- Tweaks for Older IEs-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Additional Styles for Light and Elegant Beauty Product UI -->
<style>
    body {
        font-family: 'Muli', sans-serif;
        background-color: #f5f5f5;  /* Soft, light grey background */
        color: #333;  /* Dark text for readability */
        margin: 0;
        padding: 0;
    }

    /* Container Styling */
    .container {
        padding: 30px;
    }

    /* Navbar Styling */
    .navbar {
        background-color: #ffffff;  /* Clean white background */
        border-bottom: 2px solid #f1f1f1;  /* Subtle bottom border */
    }

    .navbar a {
        color: #ff66b2 !important;  /* Soft pink for links */
        font-weight: 600;
    }

    .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        color: #ff66b2;  /* Soft pink for brand */
    }

    .navbar a:hover {
        color: #e60073;  /* Darker pink on hover */
    }

    /* Card Styling */
    .card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        margin-bottom: 20px;
        transition: box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background-color: #ffe6f2;  /* Soft pink background for the header */
        color: #ff66b2;
        font-weight: bold;
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        background-color: #ffffff;
        padding: 20px;
        color: #666;  /* Lighter grey text */
    }

    /* Footer Styling */
    footer {
        background-color: #ffffff;
        color: #666;
        padding: 20px;
        text-align: center;
        border-top: 2px solid #f1f1f1;  /* Soft top border */
    }

    footer a {
        color: #ff66b2;
        text-decoration: none;
    }

    footer a:hover {
        color: #e60073;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #ff66b2;  /* Soft pink for buttons */
        border-color: #ff66b2;
    }

    .btn-primary:hover {
        background-color: #e60073;  /* Darker pink on hover */
        border-color: #e60073;
    }

    /* Input Fields */
    .form-control {
        border-radius: 8px;
        border: 1px solid #e6e6e6;
        padding: 10px;
    }

    .form-control:focus {
        border-color: #ff66b2;
        box-shadow: 0 0 5px rgba(255, 102, 178, 0.5);
    }

    /* Icons */
    .fa {
        margin-right: 8px;
        color: #ff66b2;
    }

    .fa:hover {
        color: #e60073;
    }

    /* Card Images */
    .card img {
        border-radius: 12px;
    }

    /* Animated Hover Effects */
    .card:hover .card-body {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }

</style>
