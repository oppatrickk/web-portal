<?php
// Query existing entries.
$results = $db->query('SELECT * FROM contacts');
?>

<html>
<body>
<h2>Contacts</h2>
<a href="/contact-add.php">Add New!!</a>
<table border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php if ($results->rowCount() > 0) { ?>
        <?php foreach ($results as $row) { ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['email'] ?></td>
            </tr>
        <?php } ?>
    <?php } ?>
    </tbody>
</table>
</body>
</html>