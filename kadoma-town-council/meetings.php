<?php
include 'includes/header.php';
include 'db_connect.php';

// Fetch upcoming meetings (example query)
$upcoming_sql = "SELECT id, title, meeting_date, agenda_file FROM meetings WHERE meeting_date >= CURDATE() ORDER BY meeting_date ASC";
$upcoming_result = $conn->query($upcoming_sql);

// Fetch past meetings (example query)
$past_sql = "SELECT id, title, meeting_date, minutes_file FROM meetings WHERE meeting_date < CURDATE() ORDER BY meeting_date DESC";
$past_result = $conn->query($past_sql);
?>

<section class="mt-10 max-w-5xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Meetings & Minutes</h2>

    <h3 class="text-2xl font-semibold mb-4">Upcoming Meetings</h3>
    <?php if ($upcoming_result && $upcoming_result->num_rows > 0): ?>
        <ul class="list-disc list-inside mb-8">
            <?php while ($row = $upcoming_result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['title']); ?></strong> - <?php echo htmlspecialchars($row['meeting_date']); ?>
                    <?php if (!empty($row['agenda_file'])): ?>
                        - <a href="uploads/meetings/<?php echo htmlspecialchars($row['agenda_file']); ?>" target="_blank" class="text-blue-700 hover:underline">Download Agenda</a>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No upcoming meetings scheduled.</p>
    <?php endif; ?>

    <h3 class="text-2xl font-semibold mb-4">Past Meeting Minutes</h3>
    <?php if ($past_result && $past_result->num_rows > 0): ?>
        <ul class="list-disc list-inside">
            <?php while ($row = $past_result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['title']); ?></strong> - <?php echo htmlspecialchars($row['meeting_date']); ?>
                    <?php if (!empty($row['minutes_file'])): ?>
                        - <a href="uploads/meetings/<?php echo htmlspecialchars($row['minutes_file']); ?>" target="_blank" class="text-blue-700 hover:underline">Download Minutes</a>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No past meeting minutes available.</p>
    <?php endif; ?>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Live Stream</h3>
    <p>Watch live council meetings here: <a href="#" class="text-blue-700 hover:underline">Live Stream Link (to be added)</a></p>
</section>

<?php
include 'includes/footer.php';
?>
