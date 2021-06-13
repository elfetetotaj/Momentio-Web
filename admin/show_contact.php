<?php 

    include '../include/dbconnect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = "SELECT * FROM contacts WHERE contact_id = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $contact = $query->fetch();

?>
 <div class="mt-4 mb-4 ">
    <div class="container w-50 p-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center mt-2"><?php echo $contact['name'] ?> <?php echo $contact['lastname'] ?></h5>
            </div>
            <div class="card-body mt-2">
                <h6 class="card-subtitle mb-4 text-muted text-center"><?php echo $contact['subject'] ?></h6>
                <p class="card-text text-center"><?php echo $contact['message'] ?></p>
            </div>
        </div>
    </div>
</div>