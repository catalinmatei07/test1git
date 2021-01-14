<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the polls and poll answers
$stmt = $pdo->query('SELECT p.*, GROUP_CONCAT(pa.title ORDER BY pa.id) AS answers FROM polls p LEFT JOIN poll_answers pa ON pa.poll_id = p.id GROUP BY p.id');
$polls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Polls')?>

<div class="content home">

	<a href="create.php" class="create-poll">Creaza un sondaj</a>
	<table>
            <tr>

                <td>Titlul sondajului</td>
				<td>Raspunsurile</td>
                <td></td>
            </tr>
        <tbody>
            <?php foreach ($polls as $poll): ?>
            <tr>
                <td><?=$poll['title']?></td>
				<td><?=$poll['answers']?></td>
                <td class="actions">
					<a href="vote.php?id=<?=$poll['id']?>" class="view" title="View Poll">Participa la sondaj</i></a>
                    <a href="delete.php?id=<?=$poll['id']?>" class="trash" title="Delete Poll">Sterge sondajul</i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?=template_footer()?>