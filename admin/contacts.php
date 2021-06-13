<?php 
    $query = $pdo->query('SELECT * FROM contacts');
    $contacts = $query->fetchAll();
?>

<div class="mt-4">
<div class="container" style="background-image: url('../images/Parallax_Effects.png')">
    <h1 class="text-center mt-4" style="color:#FB6816; margin:15px; font-weight:normal;">Contacts</h1>
    <table class="table table-striped table-light table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
                <tr>
                    <td><a style="text-decoration:none; color:#FB6816" href="index.php?page=show_contact&id=<?php echo $contact['contact_id']; ?>"><?php echo $contact['contact_id']; ?></a></td>
                    <td><?php echo $contact['name']; ?></td>
                    <td><?php echo $contact['lastname']; ?></td>
                    <td><?php echo $contact['email']; ?></td>
                    <td><?php echo $contact['subject']; ?></td>
                    <td><?php echo $contact['message']; ?></td>
                    <td><?php echo $contact['date_add']; ?></td>
                    <td><a href="index.php?page=delete_contact&id=<?php echo $contact['contact_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

