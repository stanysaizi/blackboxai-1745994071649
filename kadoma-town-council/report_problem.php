<?php
include 'includes/header.php';
include 'db_connect.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $location = $_POST['location'] ?? '';
    $description = $_POST['description'] ?? '';

    if ($name && $email && $location && $description) {
        $stmt = $conn->prepare("INSERT INTO problem_reports (name, email, location, description, status, date_reported) VALUES (?, ?, ?, ?, 'Pending', NOW())");
        $stmt->bind_param("ssss", $name, $email, $location, $description);
        if ($stmt->execute()) {
            $message = "Problem reported successfully. We will address it as soon as possible.";
        } else {
            $message = "Error reporting problem. Please try again.";
        }
        $stmt->close();
    } else {
        $message = "Please fill in all fields.";
    }
}
?>

<section class="mt-10 max-w-3xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Report a Problem or Fault</h2>

    <?php if ($message): ?>
        <p class="mb-4 text-green-600"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <form method="POST" action="report_problem.php" class="space-y-4">
        <div>
            <label for="name" class="block font-medium mb-1">Name</label>
            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>
        <div>
            <label for="email" class="block font-medium mb-1">Email</label>
            <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>
        <div>
            <label for="location" class="block font-medium mb-1">Location</label>
            <input type="text" id="location" name="location" required placeholder="Enter location or address" class="w-full border border-gray-300 rounded px-3 py-2" />
        </div>
        <div>
            <label for="description" class="block font-medium mb-1">Description</label>
            <textarea id="description" name="description" rows="5" required class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800 transition">Submit Report</button>
    </form>
</section>

<?php
include 'includes/footer.php';
?>
