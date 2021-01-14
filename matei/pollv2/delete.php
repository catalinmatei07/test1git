<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the poll ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM polls WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $poll = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$poll) {
        die ('nu exista acest sondaj!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {

            $stmt = $pdo->prepare('DELETE FROM polls WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            // We also need to delete the answers for that poll
            $stmt = $pdo->prepare('DELETE FROM poll_answers WHERE poll_id = ?');
            $stmt->execute([$_GET['id']]);
            // Output msg
            $msg = 'Ai sterg sondajul';
        } else {
            // User clicked the "No" button, redirect them back to the home/index page
            header('Location: index.php');
            exit;
        }
    }
} else {
    die ('No ID specified!');
}
?>
<?=template_header('Delete')?>

<div class="content delete">
	<h2>Sterge sondajul <?=$poll['title']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Sigur doresti sa stergi acest sondaj?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$poll['id']?>&confirm=yes">Da</a>
        <a href="delete.php?id=<?=$poll['id']?>&confirm=no">Nu</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>