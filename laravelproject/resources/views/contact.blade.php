<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 to-pink-100 text-gray-800">
@include('navbar')

<!-- Contact Section -->
<section class="py-16">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold text-pink-500">Contact Us</h1>
        <p class="mt-4 text-gray-700">We'd love to hear from you! Whether you have a question, feedback, or just want to say hi, feel free to reach out to us using the form below.</p>

        <!-- Contact Form -->
        <div class="mt-12 max-w-3xl mx-auto">
            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-lg space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-semibold">Your Name</label>
                    <input type="text" name="name" id="name" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-semibold">Your Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
                </div>

                <div>
                    <label for="message" class="block text-gray-700 font-semibold">Your Message</label>
                    <textarea name="message" id="message" rows="6" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required></textarea>
                </div>

                <div>
                    <button type="submit" class="w-full bg-pink-500 text-white py-3 rounded-lg font-semibold hover:bg-pink-600 transition duration-200">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('footer')
</body>
</html>
