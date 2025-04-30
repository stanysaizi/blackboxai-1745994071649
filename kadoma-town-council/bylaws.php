<?php
include 'includes/header.php';
include 'db_connect.php';

// Fetch bylaws from database
$sql = "SELECT id, title, description, pdf_file FROM bylaws ORDER BY title ASC";
$result = $conn->query($sql);
?>

<section class="mt-10 max-w-5xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Bylaws & Regulations</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <ul class="list-disc list-inside space-y-4">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['title']); ?></strong>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <?php if (!empty($row['pdf_file'])): ?>
                        <a href="uploads/bylaws/<?php echo htmlspecialchars($row['pdf_file']); ?>" target="_blank" class="text-blue-700 hover:underline">Download PDF</a>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No bylaws or regulations available at the moment.</p>
    <?php endif; ?>
</section>

<?php
include 'includes/footer.php';
?>
