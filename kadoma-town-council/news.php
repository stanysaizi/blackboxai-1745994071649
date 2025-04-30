<?php
include 'includes/header.php';
include 'db_connect.php';

// Fetch news articles from database
$sql = "SELECT id, title, summary, date_posted FROM news ORDER BY date_posted DESC";
$result = $conn->query($sql);
?>

<section class="mt-10">
    <h2 class="text-3xl font-semibold mb-4">News & Updates</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <ul class="space-y-4 max-w-4xl mx-auto">
            <?php while ($row = $result->fetch_assoc()): ?>
                <li class="border-b pb-2">
                    <a href="news_detail.php?id=<?php echo $row['id']; ?>" class="text-xl font-semibold text-blue-700 hover:underline">
                        <?php echo htmlspecialchars($row['title']); ?>
                    </a>
                    <p class="text-gray-700"><?php echo htmlspecialchars($row['summary']); ?></p>
                    <p class="text-sm text-gray-500"><?php echo htmlspecialchars($row['date_posted']); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No news articles available at the moment.</p>
    <?php endif; ?>
</section>

<?php
include 'includes/footer.php';
?>
