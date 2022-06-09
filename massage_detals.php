<?php
include "inc/header.php";
?>

<section id="" class="section">
    <div class="container">
        <section class="mt-4 mb-4">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header">
                            View Massage
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_GET['id'];
                            $single_query = "SELECT * FROM massage WHERE id = $id ";
                            $result_single_query = mysqli_query($db, $single_query);
                            $massage = mysqli_fetch_assoc($result_single_query);
                            ?>
                            <p>Name: <?= strtolower($massage['name']); ?></p>
                            <p>Email: <?= strtolower($massage['email']); ?></p>
                            <p>Massage: <?= $massage['massage']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="massage.php" class="btn btn-info btn-sm m-auto mt-5">Back</a>
    </div>
</section>
<?php
include "inc/footer.php";
?>
<!-- Update Query -->
<?php
$update_query = "UPDATE massage SET status ='read' WHERE id = $id";
mysqli_query($db, $update_query);
?>