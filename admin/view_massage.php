<?php
$view_massage = true;
include "inc/header.php";
include "../inc/db.php";
?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.php"><?= ucfirst($_SESSION['login_success']); ?></a>
        <span class="breadcrumb-item active">View Massage</span>
    </nav>
    <div class="sl-pagebody">
        <div class="col-md-10 data-aos= fade-up m-auto">
            <div class="card" style="margin-top: 3pc;">
                <div class="card-header">
                    <!-- Total Unread Massage -->
                    <?php
                    $count_unread_query = "SELECT COUNT(*) AS massages FROM massages WHERE status='unread'";
                    $count_unread_result = mysqli_query(db(), $count_unread_query);
                    $count = mysqli_fetch_assoc($count_unread_result);
                    ?>
                    <h4>All Massagae Here

                        <?php
                        if ($count['massages'] > 0) :
                        ?>
                            <a href="massage_read_all.php" class="btn btn-info btn-small">Read All</a>
                        <?php
                        endif;
                        ?>
                    </h4>

                    <!-- Total Massages Count -->
                    <?php
                    $count_query = "SELECT COUNT(*) AS massages FROM massages";
                    $count_result = mysqli_query(db(), $count_query);
                    $count_total = mysqli_fetch_assoc($count_result);
                    ?>
                    <div class="badge badge-success">Total Massages: <?= $count_total['massages']; ?> </div>

                    <!-- Total Unread Massage -->

                    <div class="badge badge-info">Total Unread Massages: <?= $count['massages'] ?> </div>

                    <!-- Total read Massage -->
                    <?php
                    $count_read_query = "SELECT COUNT(*) AS massages FROM massages WHERE status='read'";
                    $count_read_result = mysqli_query(db(), $count_read_query);
                    $count_read = mysqli_fetch_assoc($count_read_result);
                    ?>
                    <div class="badge badge-warning">Total Read Massages: <?= $count_read['massages'] ?></div>
                </div>

                <div class="card-body">
                    <form id="f1" action="delete_all.php" method="POST">
                        <table class="table  table-inverse">
                            <thead class="thead-inverse">

                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        $("#f1 #select-all").click(function() {
                                            $("#f1 input[type='checkbox']").prop('checked', this.checked);
                                        });
                                    });
                                </script>
                                <tr>
                                    <th><input type="checkbox" id="select-all"> Check</th>
                                    <th>Serial No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT id,name,email,status FROM massages ORDER BY id DESC";
                                $result_query = mysqli_query(db(), $query);
                                foreach ($result_query as $key => $result) :
                                ?>
                                    <tr class="
                                        <?= ($result['status'] == 'unread') ? 'bg-secondary text-white' : ''; ?>
                                    ">
                                        <td><input type="checkbox" name="check[<?= $result['id']; ?>]"></td>
                                        <td scope="row"><?= $key + 1; ?></td>
                                        <td><?= strtolower($result['name']); ?></td>
                                        <td><?= $result['email']; ?></td>
                                        <td><?= $result['status']; ?></td>
                                        <td>
                                            <a href="massage_detals.php?id=<?= $result['id']; ?>" class="btn btn-success btn-small">Read</a>
                                            <a href="massage_delete.php?id=<?= $result['id']; ?>" class="btn btn-danger btn-small">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>

                                <?php
                                if ($count_total['massages'] == 0) : ?>
                                    <tr class="text-center text-danger">
                                        <td colspan="50">No Data Here</td>
                                    </tr>
                                <?php
                                endif;
                                ?>
                            </tbody>
                        </table>
                        <?php
                        if ($count_total['massages'] > 0) : ?>
                            <button class="btn btn-danger">All Mark Delete</button>
                        <?php
                        endif;
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "inc/footer.php";
?>