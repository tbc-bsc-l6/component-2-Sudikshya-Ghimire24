<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 to-pink-100 text-gray-800">
@include('navbar')

<!-- About Section -->
<section class="py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold text-pink-500">About Us</h1>
        <p class="mt-4 text-gray-700">We are a passionate team dedicated to bringing the best beauty products to your doorstep. At Beauty Bliss, we carefully curate and select only the finest beauty products, ensuring a luxurious experience for our customers.</p>
        
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-pink-500">Our Mission</h2>
            <p class="mt-4 text-gray-700">Our mission is to empower individuals with beauty products that make them feel confident, beautiful, and inspired.</p>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-pink-500">Our Story</h2>
            <p class="mt-4 text-gray-700">Founded by a group of beauty enthusiasts, Beauty Bliss has grown to become a trusted name in the industry. We believe in offering high-quality products at affordable prices, with a focus on customer satisfaction.</p>
        </div>
    </div>
</section>

@include('footer')
</body>
</html>
