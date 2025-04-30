<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

include 'includes/header.php';
include 'db_connect.php';

// Fetch user-specific data (example)
$user_id = $_SESSION['user_id'];

// Placeholder queries for service requests, billing, notifications
?>

<section class="mt-10 max-w-5xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">User Dashboard</h2>

    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>

    <h3 class="text-2xl font-semibold mb-4">Service Requests</h3>
    <p>List of your service requests will appear here (to be implemented).</p>

    <h3 class="text-2xl font-semibold mb-4">Billing History</h3>
    <p>Your billing history and payment options will appear here (to be implemented).</p>

    <h3 class="text-2xl font-semibold mb-4">Notifications & Alerts</h3>
    <p>Your notifications and alerts will appear here (to be implemented).</p>

    <h3 class="text-2xl font-semibold mb-4">Profile Management</h3>
    <p>Manage your profile information here (to be implemented).</p>

    <p><a href="logout.php" class="text-blue-700 hover:underline">Logout</a></p>
</section>

<?php
include 'includes/footer.php';
?>
