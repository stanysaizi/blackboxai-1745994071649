<?php
include 'includes/header.php';
?>

<section class="mt-10 max-w-3xl mx-auto">
    <h2 class="text-3xl font-semibold mb-4">Contact Us</h2>
    <p class="mb-6">We welcome your inquiries and feedback. Please use the form below to get in touch with the relevant department.</p>

    <form action="contact_submit.php" method="POST" class="space-y-4">
        <div>
            <label for="name" class="block font-medium mb-1">Name</label>
            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>
        <div>
            <label for="email" class="block font-medium mb-1">Email</label>
            <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>
        <div>
            <label for="message" class="block font-medium mb-1">Message</label>
            <textarea id="message" name="message" rows="5" required class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800 transition">Send Message</button>
    </form>

    <section class="mt-10">
        <h3 class="text-2xl font-semibold mb-2">Contact Information</h3>
        <p>Email: info@kadoma.gov.zw</p>
        <p>Phone: +263 123 4567</p>
        <p>Address: Kadoma Town Council, Main Street, Kadoma, Zimbabwe</p>
        <div class="mt-4">
            <iframe src="https://maps.google.com/maps?q=Kadoma%20Town%20Council&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
</section>

<?php
include 'includes/footer.php';
?>
