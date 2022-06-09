<?php
include "inc/header.php";
include "../inc/db.php";
?>

<section id="" class="section">
    <div class="container">
        <section class="mt-5 mb-4">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="card" style="margin-top: 3pc;">
                        <div class="card-header">
                            View Massage
                        </div>
                        <div class="card-body">

                            <p>Name: <?= strtolower(single_query('massages', $_GET['id'])['name']); ?></p>
                            <p>Email: <?= strtolower(single_query('massages', $_GET['id'])['email']); ?></p>
                            <p>Massage: <?= (single_query('massages', $_GET['id'])['massage']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="view_massage.php" class="btn btn-info btn-sm m-auto mt-5">Back</a>
    </div>
</section>
<?php
include "inc/footer.php";
?>
<!-- Update Query -->
<?php
$id = $_GET['id'];
$update_query = "UPDATE massages SET status ='read' WHERE id = $id";
mysqli_query(db(), $update_query);
?>