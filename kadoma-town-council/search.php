<?php
include 'includes/header.php';
include 'db_connect.php';

$search_query = $_GET['q'] ?? '';

$results = [];

if ($search_query) {
    $search_query_escaped = $conn->real_escape_string($search_query);
    $sql = "SELECT 'News' AS type, id, title, summary AS content FROM news WHERE title LIKE '%$search_query_escaped%' OR summary LIKE '%$search_query_escaped%'
            UNION
            SELECT 'Services' AS type, id, service_name AS title, description AS content FROM services WHERE service_name LIKE '%$search_query_escaped%' OR description LIKE '%$search_query_escaped%'
            ORDER BY type, title";
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }
}
?>

<section class="mt-10 max-w-5xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Search Results for "<?php echo htmlspecialchars($search_query); ?>"</h2>

    <?php if ($search_query): ?>
        <?php if (count($results) > 0): ?>
            <ul class="list-disc list-inside space-y-4">
                <?php foreach ($results as $item): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($item['type']); ?>:</strong>
                        <a href="<?php echo strtolower($item['type']); ?>_detail.php?id=<?php echo $item['id']; ?>" class="text-blue-700 hover:underline">
                            <?php echo htmlspecialchars($item['title']); ?>
                        </a>
                        <p><?php echo htmlspecialchars($item['content']); ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No results found.</p>
        <?php endif; ?>
    <?php else: ?>
        <p>Please enter a search query.</p>
    <?php endif; ?>
</section>

<?php
include 'includes/footer.php';
?>
