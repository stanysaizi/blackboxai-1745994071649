<?php
include 'includes/header.php';
include 'db_connect.php';

if (!isset($_GET['id'])) {
    echo "<p>News article not found.</p>";
    include 'includes/footer.php';
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT title, content, date_posted FROM news WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $news = $result->fetch_assoc();
} else {
    echo "<p>News article not found.</p>";
    include 'includes/footer.php';
    exit;
}
?>

<section class="mt-10 max-w-4xl mx-auto">
    <h2 class="text-3xl font-semibold mb-4"><?php echo htmlspecialchars($news['title']); ?></h2>
    <p class="text-sm text-gray-500 mb-6"><?php echo htmlspecialchars($news['date_posted']); ?></p>
    <div class="prose max-w-full">
        <?php echo nl2br(htmlspecialchars($news['content'])); ?>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
