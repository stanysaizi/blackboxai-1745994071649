<?php
include 'includes/header.php';
include 'db_connect.php';

// Fetch job openings from database
$sql = "SELECT id, title, description, application_deadline FROM careers ORDER BY application_deadline ASC";
$result = $conn->query($sql);
?>

<section class="mt-10 max-w-5xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Careers & Vacancies</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <ul class="list-disc list-inside space-y-4">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['title']); ?></strong>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <p>Application Deadline: <?php echo htmlspecialchars($row['application_deadline']); ?></p>
                    <p>To apply, please send your application to <a href="mailto:hr@kadoma.gov.zw" class="text-blue-700 hover:underline">hr@kadoma.gov.zw</a>.</p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No current job openings available.</p>
    <?php endif; ?>
</section>

<?php
include 'includes/footer.php';
?>
