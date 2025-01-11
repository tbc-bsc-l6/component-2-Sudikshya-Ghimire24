<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('navbar')
        <!-- About Section -->
        <section id="about" class="bg-gray-50 py-16">
        <div class="container mx-auto flex flex-col items-center text-center md:flex-row md:text-left md:space-x-8">
            <div class="md:w-1/2">
                <img src="https://via.placeholder.com/500" alt="About Us" class="rounded-lg shadow-lg">
            </div>
            <div class="mt-8 md:mt-0 md:w-1/2">
                <h3 class="text-3xl font-bold text-pink-500">About Us</h3>
                <p class="mt-4 text-gray-700">At Beauty Bliss, we believe everyone deserves to feel beautiful. That’s why we offer products that are not only effective but also safe and ethically made.</p>
            </div>
        </div>
    </section>
    @include('footer')
</body>
</html>